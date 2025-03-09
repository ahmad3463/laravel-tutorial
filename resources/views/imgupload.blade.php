<div>
<h1>file uploading</h1>
<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button>upload image</button>
</form>
</div>
