<div>

<h1>Flash Session</h1>
<hr>

@if(session('message'))
    <span class="massage-banner">{{session('message')}}</span>
        {{(session()->reflash())}}
    @endif
<form action="user" method="post">
    @csrf

    <input type="text" name="username" placeholder="Enter your name">
    <br><br>
    <input type="email" name="email" placeholder="Enter your email">
    <br><br>
    <input type="password" name="password" placeholder="Enter your password">
    <br><br>
    <button>add new user</button>
</form>

    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>


<style>
    .massage-banner{
    background-color: #61e761d9;
    margin: 7px 0px;
    padding: 2px;
    display: inline-block;
    border-radius: 2px;
    }
</style>