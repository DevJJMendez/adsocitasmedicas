<!-- Heading -->
@can('Administrador')
    <h6 class="navbar-heading text-muted">Usuarios</h6>
@elsecan('Doctor')
    <h6 class="navbar-heading text-muted">Opciones Doctores</h6>
@elsecan('Paciente')
    <h6 class="navbar-heading text-muted">Opciones Pacientes</h6>
@endcan
<ul class="navbar-nav">
    @can('Administrador')
        <li class="nav-item  active ">
            <a class="nav-link   " href="{{ route('asignar.index') }}">
                <i class="fas fa-user-cog text-black"></i> Usuarios
            </a>
        </li>

        <li class="nav-item  active ">
            <a class="nav-link   " href="{{ url('/roles') }}">
                <i class="fas fa-user-cog text-black"></i> Lista de roles
            </a>
        </li>
        <li class="nav-item  active ">
            <a class="nav-link  active " href="{{ url('/permisos') }}">
                <i class="fas fa-key"></i> Permisos
            </a>
        </li>
    </ul>
    <h6 class="navbar-heading text-muted">Opciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item  active ">
            <a class="nav-link  active " href="">
                <i class="ni ni-tv-2 text-danger"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('medicos.index') }}">
                <i class="fas fa-stethoscope text-info"></i> Médicos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route('patients.index') }}">
                <i class="fas fa-bed text-warning"></i> Pacientes
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('medical-entities.index') }}">
                <i class="fas fa-bed text-warning"></i> Entidades Médicas
            </a>
        </li>
    @endcan

    @can('Doctor')
        <li class="nav-item  active ">
            <a class="nav-link" href="">
                <i class="far fa-calendar-alt"></i> Citas Agendadas
            </a>
        </li>
    @endcan
    @can('Paciente')
        <li class="nav-item  active ">
            <a class="nav-link" href="{{ route('appointments.create') }}">
                <i class="ni ni-calendar-grid-58"></i> Agendar Cita
            </a>
        </li>
        <li class="nav-item  active ">
            <a class="nav-link" href="{{ route('appointments.index') }}">
                <i class="ni ni-calendar-grid-58"></i> Citas Agendadas
            </a>
        </li>
        <li class="nav-item  active ">
            <a class="nav-link" href="{{ route('appointments.index') }}">
                <i class="ni ni-calendar-grid-58"></i> Calendario de Citas
            </a>
        </li>
    @endcan
    {{-- logout --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('appointments.index') }}"
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
