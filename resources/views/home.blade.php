<h1>user form</h1>

<form action="user-form" method="post">
@csrf
<h4>user skill</h4>

<input type="checkbox" name="skill[]" value="PHP" id="php">
<label for="php">PHP</label>
<input type="checkbox" name="skill[]" value="JS" id="js">
<label for="js">Javascirpt</label>
<input type="checkbox" name="skill[]" value="Node" id="node">
<label for="node">Node</label>


<div>
    <h5>Gender</h5>
    <input type="radio" name="gender" value="male" id="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="female" id="female">
    <label for="female">Female</label>
</div>

    <div>
        <h5>City</h5>

        <select name="city" id="">
            <option value="Peshawar">Peshawar</option>
            <option value="Charsadda">Charsadda</option>
            <option value="Mardan">Mardan</option>
        </select>
    </div>
<br>
    <button>submit form</button>
</form>