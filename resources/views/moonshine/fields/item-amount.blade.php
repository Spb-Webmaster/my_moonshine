<x-moonshine::table xmlns:x-moonshine="http://www.w3.org/1999/html">
    <x-slot:tbody>
        <tr
            x-data="{'amount' : {{ $element->formViewValue($item)['amount'] }},
                     'qty' : {{ $element->formViewValue($item)['qty'] }}
            }">

            <td>

                <x-moonshine::form.input-wrapper :name="$element->name('amount')" label="Сумма">

                    <x-moonshine::form.input
                        type="number"
                        :value="$element->formViewValue($item)['amount']"
                        :name="$element->name('amount')"
                        x-model="amount" />

                </x-moonshine::form.input-wrapper>

            </td>
            <td>
                <x-moonshine::form.input-wrapper :name="$element->name('qty')" label="Кол-во">

                    <x-moonshine::form.input
                        type="number"
                        :value="$element->formViewValue($item)['qty']"
                        :name="$element->name('gty')"
                        x-model="qty" />

                </x-moonshine::form.input-wrapper>
            </td>
            <td>

                <x-moonshine::badge color="green" x-text="amount * qty" >
                   0
                </x-moonshine::badge>


            </td>

        </tr>


    </x-slot:tbody>

</x-moonshine::table>
