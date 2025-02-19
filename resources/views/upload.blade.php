<div>
    <h1>File Upload</h1>


    <form action="loaded" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">

        <button>upload file</button>
    </form>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->

</div>
