<?php
  use Illuminate\Support\Str;
?>

@extends('layouts.panel')

@section('content')



      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Editar rol</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/medicos')}}" class="btn btn-sm btn-success">
                <i class="fas fa-angle-left"></i>
                Regresar</a>
            </div>
          </div>
        </div>

        <div class="card-body">

            @if (session('info'))
                <div class="alert alert-success">
                    {{session('info')}}
                </div>

            @endif

            <div class="card">
                <div class="card-body">
                    {!! Form::model( $role , ['route' => ['admin.roles.update', $role], 'method' => 'put'])!!}
                    @include('acceso.roles.partials.form')

                    {!! Form::submit('Actualizar Rol' , ['class' => 'btn btn-primary']) !!}

                    {!! Form::close()!!}
                </div>

            </div>



        </div>
      </div>



@endsection
