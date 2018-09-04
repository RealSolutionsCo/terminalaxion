@extends('layouts.esqueleto')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Esta seguro que desea borrar el registro?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['route' => ['users.destroy', 'ID'], 'method' => 'DELETE' , 'id' => 'formDelete']) !!}
        <div class="modal-body">
          Recuerde que al borrar cualquier registro se borrara toda la informacion vinculada a este
          <input type="text" name="lista" id="lista"/>

            
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">SI</button>
        </div>
      {!! Form::close() !!} 
    </div>
  </div>
</div>
@section('estilos')
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
          	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3 class="col-md-6 col-sm-4 col-xs-12">Listado de usuarios <small></small></h3>
                    @can('users.create')
                      <a class="col-md-6 col-xs-9" href="{{ route ('users.create') }}" ><button class="btn btn-success pull-right  btn-md"><i class="fa fa-plus-circle fa-lg "></i> Crear usuario</button></a>
                    @endcan 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @can('users.index')
                      <table id="data" class="tile table table-striped jambo_table bulk_action">
                        <thead>
                          
                          <tr class="headings">
                            <th class="column-title">Nombre </th>
                            <th class="column-title">Correo Electronico </th>
                          @if(Auth::user()->can('all-access') || Auth::user()->can('users.edit') || Auth::user()->can('users.show') || Auth::user()->can('users.destroy'))
                            <th class="column-title">Acciones </th>
                          @endif
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($users as $user)
                            <tr class="even pointer">
                              <td class="">{{ $user->name ." ".  $user->lastname}}</td>
                              <td class="">{{ $user->email }} </td>
                              @if(Auth::user()->can('all-access') || Auth::user()->can('users.edit') || Auth::user()->can('users.show') || Auth::user()->can('users.destroy'))
                                <td class="">
                                  @can('users.show')
                                    <a href="{{ route ('users.show', $user->id) }}"><button class="btn btn-dark"><i class="fa fa-info-circle"></i></button></a>
                                  @endcan
                                  @can('users.edit')
                                    <a href="{{ route('users.edit', $user->id) }}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                                  @endcan
                                  @can('users.destroy')
                                  <button type="button" data-id="{{ $user->id }}" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                  @endcan
                                </td>
                              @endif
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    @endcan
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function (e) {
  $('#exampleModal').on('show.bs.modal', function(e) {    
    var id = $(e.relatedTarget).data().id;
    var form = $('#formDelete');
    form.attr('action').replace('users.destroy', 'id');
    });
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#data').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });

  } );
</script>
<script type="text/javascript" src={{ asset('js/jquery.dataTables.min.js') }}></script>
<script type="text/javascript" src={{ asset('js/dataTables.bootstrap.min.js') }}></script>
@endsection