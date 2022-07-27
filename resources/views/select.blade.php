<table>
    @foreach($selectdata as $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        

    </tr>
    @endforeach
</table>