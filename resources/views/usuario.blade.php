@extends ('layouts.template')

@section('title')
{{ $user->Nombres }}
{{ $user->Apellidos}}

@endsection

@section('content')

<p><strong>Usuario: </strong>{{ $user->Usuario}}</p>
<p><strong>Direccion: </strong>{{ $user->Direccion}}</p>
<p><strong>Email: </strong>{{ $user->Correo}}</p>
@endsection