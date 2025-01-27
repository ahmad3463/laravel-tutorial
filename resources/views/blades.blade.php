<div>

<h1>blades and here methods in laravel</h1>
    <!-- Order your soul. Reduce your wants. - Augustine -->
     <h2>{{$name}}</h2>
     <!-- <h2>{{rand()}}</h2> this is a by defualt function is php -->
      <!-- <h2>{{$user[1]}}</h2> -->

      @if($name == "Ahmad Khan")
      <h3>this is ahmad</h3>
      @elseif($name == "ali")
      <h3>this is ali</h3>
      @else
      <h3>other users</h3>
      @endif

<div>
    @foreach($user as $users)
    <h2>{{$users}}</h2>
    @endforeach
</div>
      <div>
        @for($i = 0; $i<=10;$i++)
        <h3>{{$i}} </h3>
        @endfor
      </div>
</div>
