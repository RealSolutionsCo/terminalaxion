@extends('layouts.esqueleto')

@section('estilos')
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">
         	<div class="col-md-12 col-sm-12 col-xs-12">
             <h3>{{ $user->name . $user->lastname }} </h3>
              <ul class="list-unstyled user_data">
                <li><i class="fa fa-envelope user-profile-icon"></i> Correo: {{ $user->email }}
                </li>

                <li>
                  <i class="fa fa-briefcase user-profile-icon"></i> Cargo: {{ $user->position }}
                </li>

                <li class="m-top-xs">
                  <i class="fa fa-plus-circle user-profile-icon"></i>
                  Usuario creado el {{ $user->created_at }}</a>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
