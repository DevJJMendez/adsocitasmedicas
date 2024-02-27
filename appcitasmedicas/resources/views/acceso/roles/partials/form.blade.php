<div class="form-group">
    {!! Form::label('name','Nombre')!!}
    {!! Form::text('name', null,['class' => 'form-control' , 'placeholder' => 'Ingrese el nombre del rol', 'disabled']) !!}

    @error('name')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror

</div>
<h2 class="h3">Lista de permisos</h2>
@foreach ($permisos as $permiso)
        <div>
            <label>
                  {!! Form::checkbox('permiso[]' , $permiso->id , null, ['class' => 'mr-1']) !!}
                  {!! $permiso->name!!}
            </label>
        </div>
@endforeach