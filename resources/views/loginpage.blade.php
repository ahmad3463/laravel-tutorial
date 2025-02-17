<div>
    <h1>login page</h1>
    <hr>


    <form action="user" method="post">
        @csrf
    <input type="text" name="name" placeholder="Enter your name">
    <br><br>
    <input type="password" name="password" placeholder="Enter your password">
    <br><br>

    <button>login</button>

    </form>
    <!-- When there is no desire, all things are at peace. - Laozi -->
</div>
