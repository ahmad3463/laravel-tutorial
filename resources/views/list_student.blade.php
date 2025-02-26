<div>
    <h1>Student List</h1>


    <table border="1">
        <tr>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>PHONE</td>
            <td>CREATED_DATE</td>
            <td>Operation</td>
        </tr>

        @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->created_at}}</td>
            <td>
                <a href="{{'delete/'.$student->id}}">Delete</a>
                <a href="{{'edit/'.$student->id}}">Edit</a>
        </td>
        </tr>
        @endforeach
    </table>
</div>
