@extends('layouts.panel')

@section('content')



      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Lista de roles</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('admin.roles.create')}}" class="btn btn-sm btn-primary">Nuevo rol</a>
            </div>
          </div>
        </div>
        <div class="card-body">
            @if (session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>

        @endif
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>ID</th>
                <th>Role</th>
                <th colspan="2"></th>

            </tr>
            </thead>
            <tbody>
                @foreach ($roles  as $role)


              <tr>
                <th scope="row">
                  {{ $role->id}}
                </th>
                <td>
                 {{ $role->name}}
                </td>
                <td width="10px">
                  <a href="{{ route('admin.roles.edit',$role)}}" class="btn btn-sm btn-primary">Editar</a>
                </td>

                <td width="10px">
                    <form action="{{route('admin.roles.destroy' , $role )}}" method="POST">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>

                    </form>

                </td>



              </tr>
              @endforeach
            </tbody>
          </table>





      </div>





@endsection
