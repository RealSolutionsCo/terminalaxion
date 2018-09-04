@extends('layouts.esqueleto')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Listado de roles </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          	<div class="col-lg-12  offset-lg-1">
	          	@can('roles.create')
	            	<a href="{{ route ('roles.create') }}"><button class="btn btn-success pull-right">Crear Rol <i class="fa fa-plus-square"></i> </button></a>
	            @endcan	
          	</div>

          	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Listado de Roles <small></small></h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Descripcion</th>
                          <th>CRUD</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($roles as $role)
                          <tr>
                            <th>{{ $role->name }}</th>
                            <th>{{ $role->description }}</th>
                            <th>
                              @can('roles.show')
                                <a href="{{ route ('roles.show', $role->id)  }}"><button class="btn btn-info"><i class="fa fa-eye"></i></button></a>
                              @endcan
                              @can('roles.edit')
                                <a href="{{ route ('roles.edit', $role->id)  }}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                              @endcan
                              @can('roles.destroy')
                                <button class="btn btn-danger"><i class="fa fa-trash-o  "></i></button>
                              @endcan
                            </th>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection