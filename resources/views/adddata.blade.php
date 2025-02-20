<div>
    <h1>Student Data</h1>
    <form action="student" method="post">
    @csrf
        <input type="text" name="name" placeholder="Enter Your name">
        <br><br>
        <input type="text" name="email" placeholder="Enter Your email">
        <br><br>
        <input type="text" name="phone" placeholder="Enter Your phone">
        <br><br>
        <button>add new user</button>
    </form>
</div>
