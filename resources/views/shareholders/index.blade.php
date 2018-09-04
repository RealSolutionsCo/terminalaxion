@extends('layouts.esqueleto')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Nuevos accionistas</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
          	<div class="col-lg-12  offset-lg-1">
	          	@can('users.create')
	            	<button class="btn btn-success pull-right">Crear Accionista</button>
	            @endcan	
          	</div>

          	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de accionistas <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Tipo Doc.</th>
                          <th>Sexo</th>
                          <th>N° folio</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($shareholders as $shareholder)
                      		<tr>
	                          <td>{{ $shareholder->tipo_documento }}</td>
	                          <td>{{ $shareholder->sexo }}</td>
	                          <td>{{ $shareholder->n_folio }}</td>
	                        </tr>
                      	@endforeach
                      </tbody>
                    </table>
                    {{ $shareholders->render() }}
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection