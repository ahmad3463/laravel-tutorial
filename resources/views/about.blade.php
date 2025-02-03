<h1>User Data</h1>
    <!-- {{print_r($errors)}} -->

    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color: red;">
        {{$error}}
    </div>
    @endforeach
    @endif -->
<form action="form-data" method="post">
    @csrf

    <div class="input-wrapper">
        <input type="text" name="username" placeholder="enter your name" value="{{old('username')}}" class="{{$errors->first('username')?'input-error':''}}">
        <span style="color: red;">@error('username'){{$message}}@enderror</span>
    </div>
    <div class="input-wrapper">
        <input type="email" name="useremail" placeholder="enter your email" value="{{old('useremail')}}" class="{{$errors->first('useremail')?'input-error':''}}">
        <span style="color: red;">@error('useremail'){{$message}}@enderror</span>

    </div>
    <div class="input-wrapper">
        <input type="text" name="usercity" placeholder="enter your city" value="{{old('usercity')}}" class="{{$errors->first('usercity')?'input-error':''}}">
        <span style="color: red;">@error('usercity'){{$message}}@enderror</span>
    </div>

    <div>
        <h4>Skills</h4>
        <input type="checkbox" name="skills[]" id="php" value="PHP">
        <label for="php">PHP</label>
        <input type="checkbox" name="skills[]" id="Java" value="Java">
        <label for="Java">Java</label>
        <input type="checkbox" name="skills[]" id="Node" value="Node">
        <label for="Node">Node</label><br><br>
    <span style="color: red;">@error('skills'){{$message}}@enderror</span>
    </div>


    <button class="input-wrapper">Submit Form</button>

</form>


<style>
    input {
        padding: 10px;
        color: orange;
        border: 1px solid orange;
    }
.input-wrapper{
    margin-top: 10px;
}
    button {
        padding: 10px;
        color: orange;
        border: 1px solid orange;
        background-color: #fff;
        cursor: pointer;
    }

    .input-error{
        border: 1px solid red;
    }
</style>