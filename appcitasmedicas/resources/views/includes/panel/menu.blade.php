<!-- Heading -->
@role('Admin')
<h6 class="navbar-heading text-muted">Usuarios</h6>
<ul class="navbar-nav">

    <li class="nav-item  active ">
        <a class="nav-link   " href="{{route('asignar.index')}}">
           <i class="fas fa-user-cog text-black"></i> Usuarios

        </a>
    </li>

    <li class="nav-item  active ">
        <a class="nav-link   " href="{{url('/roles')}}">
           <i class="fas fa-user-cog text-black"></i> Lista de roles

        </a>
      </li>
    <li class="nav-item  active ">
        <a class="nav-link  active " href="{{ route('permisos.view') }}">
            <i class="fas fa-key"></i> Permisos
        </a>
    </li>


</ul>
@endrole

<h6 class="navbar-heading text-muted">Opciones</h6>
<!-- Navigation -->
<ul class="navbar-nav">
    @role('Admin')
    <li class="nav-item  active ">
        <a class="nav-link  active " href="">
            <i class="ni ni-tv-2 text-danger"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('specialtyView') }}">
            <i class="ni ni-briefcase-24 text-blue"></i> Especialidades
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('medico.view') }}">
            <i class="fas fa-stethoscope text-info"></i> Médicos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('paciente.view') }}">
            <i class="fas fa-bed text-warning"></i> Pacientes
        </a>
    </li>
    @endrole
    <li class="nav-item">
        <a class="nav-link " href="{{ route('citas.view') }}">
            <i class="fas fa-bed text-warning"></i> Citas
        </a>
    </li>
    @role('Admin')
    <li class="nav-item">
        <a class="nav-link " href="{{ route('medical.entities.view') }}">
            <i class="fas fa-bed text-warning"></i> Entidades Médicas
        </a>
    </li>
    @endrole
    <li class="nav-item">
        <a class="nav-link" href="{{ route('citas.view') }}"
            onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <i class="fas fa-sign-in-alt"></i> Cerrar Sesión
        </a>
        <form action="{{ route('logout') }}" method="POST" style="display: none" id="formLogout">
            @csrf
        </form>
    </li>
</ul>


<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Reportes</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-books text-default"></i> Citas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-chart-bar-32 text-warning"></i>Desempeño Médico
        </a>
    </li>
</ul>
