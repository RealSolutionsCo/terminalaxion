@extends('layouts.esqueleto')
@section('estilos')
<link href="{{ asset('css/iCheck/skins/flat/green.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Registro de usuarios</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form method="post" action="{{ url('users/store') }}" class="form-horizontal form-label-left input_mask">
                @csrf
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" id="nombres" name="name" placeholder="Nombres">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left"  name="lastname" placeholder="Apellidos">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div> 

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left"" name="position" placeholder="Cargo">
                  <span class="fa fa-briefcase form-control-feedback left" aria-hidden="true"></span>
                </div> 


                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="mail" class="form-control has-feedback-left" id="mail" name="email" placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="password" class="form-control has-feedback-left"  name="password" placeholder="Contraseña">
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
                  <div>
                      @foreach($permissions as $permission)
                        <div class="col-md-3 col-sm-3 col-xs-12">
                              <div class="checkbox">
                                <label>
                                  <input value="{{ $permission->id }}" type="checkbox" name="permissions[]" class="flat" > {{ $permission->name }}
                                </label>
                              </div>   
                          </div>
                      @endforeach
                  </div>
                  <div class="form-group">
                    <div class="col-md-8 col-sm-9 col-xs-12 col-md-offset-4">
                      <a href="{{ url()->previous() }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                      <button type="submit" class="btn btn-success">Registrar</button>
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

