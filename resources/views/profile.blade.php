<div>

<h1>profile page</h1>


@if(session('username'))
<h1>Welcome , {{session('username')}}</h1>
@else
<h1>no user found in session <a href="login">login</a></h1>
@endif


<a href="logout">logout</a>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
