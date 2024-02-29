<?php
  use Illuminate\Support\Str;
?>

@extends('layouts.panel')

@section('content')



      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h1 class="mb-0">Usuarios Y Roles</h1>
            </div>
            <div class="col text-right">
              <a href="{{ url('/medicos')}}" class="btn btn-sm btn-success">
                <i class="fas fa-angle-left"></i>
                Regresar</a>
            </div>
          </div>
        </div>

        <div class="card-body">




            <div class="card">
                <div class="card-header">
                    <span>Nombre : </span> <span>{{ $user->thirdDataUser->first_name}}</span>
                </div>
                <div class="card-body">
                    <h2 class="h3">Lista de permisos</h2>
                    {!! Form::model( $user , ['route' => ['asignar.update', $user], 'method' => 'put'])!!}

                    @foreach ($roles as $role)
                            <div>
                                <label>
                                      {!! Form::checkbox('roles[]' , $role->id ,$user->hasAnyRole($role->id) ?:false , ['class' => 'mr-1']) !!}
                                      {!! $role->name!!}
                                </label>
                            </div>
                    @endforeach

                    {!! Form::submit('Asignar Roles' , ['class' => 'btn btn-primary']) !!}

                    {!! Form::close()!!}
                </div>

            </div>



        </div>
      </div>



@endsection
