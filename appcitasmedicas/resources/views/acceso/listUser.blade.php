@extends('layouts.panel')

@section('content')



      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Lista de usuarios</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('admin.roles.create')}}" class="btn btn-sm btn-primary">Nuevo usuario</a>
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
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>

                <th colspan="2">Acciones</th>

            </tr>
            </thead>
            <tbody>

                @foreach ($usersWithRoles  as $user)


              <tr>
                <th >
                  {{ $user->id}}
                </th>
                <th >
                 {{ $user->thirdDataUser->first_name}}
                </td>
                <td>
                 {{ $user->email}}
                </td>
                <th>
                    {{ $user->roles->first()->name}}
                   </td>
                   <td>

                    <form action="{{ route('asignar.destroy',$user) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('asignar.edit',$user) }}"
                            class="btn btn-sm btn-primary">
                            Editar
                        </a>
                        {{-- <button type="submit" class="btn btn-sm btn-danger">Eliminar</button> --}}
                    </form>

                </td>



              </tr>
              @endforeach
            </tbody>
          </table>







      </div>





@endsection
