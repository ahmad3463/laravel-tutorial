<h1>user form</h1>

<form action="addUser" method="post">
    @csrf
    <div class="input-wrapper">
        <input type="text" placeholder="enter your name" name="username">
    </div>
    <div class="input-wrapper">
        <input type="email" placeholder="enter your email" name="useremail">
    </div>
    <div class="input-wrapper">
        <input type="text" placeholder="enter your city" name="usercity">
    </div>
    <div class="input-wrapper">
        <button>Submit</button>
    </div>
</form>

<style>
    input {
        padding: 5px;
        color: #e1af5f;
        border-radius: 5px;
        width:200px;
        height:40px;
        border: 1px solid #ff7043;
    }
    .input-wrapper{
        margin: 10px;
    }

    button {
        padding: 5px;
        color: #e1af5f;
        border-radius: 5px;
        width:200px;
        height:40px;
        border: 1px solid #ff7043;
    }
</style>