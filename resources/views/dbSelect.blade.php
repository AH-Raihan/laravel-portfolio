<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>class</td>
        <td>roll</td>
    </tr>
    @foreach($datas as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->class}}</td>
        <td>{{$data->roll}}</td>
    </tr>
    @endforeach
</table>