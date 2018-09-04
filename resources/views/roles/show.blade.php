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

          	</div>

          	<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Listado de Roles <small></small></h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    {{ $role->name }}
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection