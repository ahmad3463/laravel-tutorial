<div>

<h1>Users Data</h1>

<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        
    </tr>
    @endforeach
</table>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
