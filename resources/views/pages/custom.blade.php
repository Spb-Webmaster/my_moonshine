<x-moonshine::table>
<x-slot:thead>

    <th>ID</th>
    <th>title</th>
    <th>-</th>

</x-slot:thead>
<x-slot:tbody>


    @foreach($items as $item)
        <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['title'] }}</td>
                <td>

                    <x-moonshine::form.textarea/>
                    <x-moonshine::icon icon="heroicons.pencil"/>

                </td>
        </tr>
    @endforeach

</x-slot:tbody>

</x-moonshine::table>
