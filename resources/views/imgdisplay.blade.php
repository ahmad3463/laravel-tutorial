<div>
    <h1>List of Images</h1>

    @foreach($imgData as $img)
    <img width="100px" src="{{url('storage/public/'.$img->path)}}" alt="">
    @endforeach
</div>
