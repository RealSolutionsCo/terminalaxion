@extends('layouts.esqueleto')
@section('estilos')
<link href="{{ asset('css/iCheck/skins/flat/green.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Editar usuario <small>{{ $user->name }}</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
             {!! Form::model($user, ['route' => ['users.update', $user->id],
                    'method' => 'PUT']) !!}
                {!! csrf_field() !!}
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="nombres" placeholder="Nombres" name="name" value="{{ $user->name }}">
                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" name="lastname" placeholder="Apellidos" value="{{ $user->lastname }}">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div> 

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" placeholder="Cargo" name="position" value="{{ $user->position }}">
                  <span class="fa fa-briefcase form-control-feedback left" aria-hidden="true"></span>
                </div> 


                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" value="{{ $user->email }}" placeholder="Correo electronico" name="email">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                  </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="password" class="form-control has-feedback-left" name="password" placeholder="Escribe tu contraseña">
                    <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                  </div> 
                  <br>
                  <div class="col-md-12 col-xs-12">
                      <h3>Super usuario</h3>
                  </div>
                  @foreach($roles as $role)
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <label>
                        {{ Form::checkbox('roles[]', $role->id, null, ['class' => 'flat']) }}
                        {{ $role->name }}
                        <em>({{ $role->description }})</em>
                        </label>
                    </div>
                  @endforeach
                  <div class="col-md-12 col-xs-12">
                      <h3>Permisos</h3>
                  </div>
                      @foreach($permissions as $permission)
                      <div class="col-md-3 col-sm-3 col-xs-12">
                            <label>
                            {{ Form::checkbox('permissions[]', $permission->id, null, ['class' => 'flat']) }}
                            {{ $permission->name }}
                            <em>({{ $permission->description }})</em>
                            </label>
                        </div>
                        @endforeach
                  
                  <div class="form-group">
                    <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-4">
                      <a href="{{ url()->previous() }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                      <button type="submit" class="btn btn-warning">Editar</button>
                    </div>
                  </div>
            </form>
          </div>
        </div>
    </div>
</div>            
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset ('css/iCheck/icheck.min.js') }}"></script>
@endsection

