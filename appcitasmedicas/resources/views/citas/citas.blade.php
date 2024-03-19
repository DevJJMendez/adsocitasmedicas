@extends('layouts.panel')
@section('content')
    <div id="calendar" style="width: 50%; display: inline-block">
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/calendario.js') }}"></script>
@endsection
