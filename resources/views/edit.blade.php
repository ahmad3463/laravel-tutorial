<div>
    <h1>Student Record</h1>

    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{$data->name}}" placeholder="Enter your name"><br><br>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Enter your email"><br><br>
        <input type="text" name="phone" value="{{$data->phone}}" placeholder="Enter your phone"><br><br>
        <button>update</button>
        <a href="/list">cancel</a>
    </form>
</div>
