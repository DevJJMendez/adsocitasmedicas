<?php
  use Illuminate\Support\Str;
?>

@extends('layouts.panel')

@section('content')



      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Nuevo medico</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/roles')}}" class="btn btn-sm btn-success">
                <i class="fas fa-angle-left"></i>
                Regresar</a>
            </div>
          </div>
        </div>
        <div class="card-body">


            <div class="card">
                <div class="card-body">
                        {!! Form::open(['route' => 'admin.roles.store'])!!}

                            @include('acceso.roles.partials.form')

                           {!! Form::submit('Crear Rol' , ['class' => 'btn btn-primary']) !!}
                            {!! Form::close()!!}

                </div>
            </div>


        </div>
      </div>



@endsection
