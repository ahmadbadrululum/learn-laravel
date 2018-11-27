<h1>halo pemilik passport {{ $user->name }} </h1>
<h2>Daftar forum</h2>
<ul>
@foreach( $user->forums as $f )
    <li>{{ $f->title }}</li>
@endforeach
</ul>

<h2>Daftar Kelas</h2>
<ul>
@foreach( $user->lessons as $l )
<!-- die(var_dump($l)); -->
    <li>{{ $l->title }}</li>

@endforeach
</ul>
