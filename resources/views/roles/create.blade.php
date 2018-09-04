@extends('layouts.esqueleto')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-lg-12  offset-lg-1">

            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Crear Rol <small></small></h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form method="post" action="{{ url ('roles/store') }}" class="form-horizontal form-label-left input_mask">
                      {!! csrf_field() !!}
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="name" placeholder="Nombre rol" >
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>


                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="slug" placeholder="URL amigable">
                        <span class="fa fa-unlink form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <label for="message">Descripción (190 caracteres max) :</label>
                          <textarea id="message" required="required" name="description" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>

                      <div>
                        <h3>Permisos</h3>
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
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-4">
                          <button type="button" class="btn btn-primary">Cancelar</button>
                          <button type="submit" class="btn btn-success">Crear Rol</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection