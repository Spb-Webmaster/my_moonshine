
<x-moonshine::table>
<x-slot:thead>

    <th>ID</th>
    <th>title</th>
    <th>Фото</th>

</x-slot:thead>
<x-slot:tbody>

        <tr>
                <td style="vertical-align: top">{{ $item->id }}</td>
                <td style="vertical-align: top">{{ $item->title }}</td>
                <td style="vertical-align: top"><img src="{{ asset('storage/' . $item->img)  }}" /></td>
        </tr>


</x-slot:tbody>

</x-moonshine::table>
