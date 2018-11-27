<h2>daftar yg mengikuti kelas {{ $lessons->title }} </h2>




<ul>
@foreach( $lessons->user as $u )
<!-- die(var_dump($l)); -->
    <li>{{ $u->name }}</li>
    <!-- {{ $user->pivot->created_at}} -->

@endforeach
</ul>
