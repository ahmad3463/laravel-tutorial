<div>
<h1>students List</h1>


<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Batch</td>
    </tr>

        @foreach($datas as $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->batch}}</td>
    </tr>
        @endforeach
</table>

    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div>
