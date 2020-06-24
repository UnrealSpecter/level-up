@extends('master')

@section('additional-styles')
@endsection

@section('content')

    <!-- MENU -->
    <div id="menu" class="z-50 h-100 w-screen fixed top-0 left-0 shadow-lg bg-white flex justify-between px-50 items-center montserrat-bold uppercase">
        <a href="/">Level Up!</a>
        <a href="{{ route('dashboard-page') }}">Dashboard</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="hidden">
        {{ csrf_field() }}
        </form>
    </div>

    <!-- OVERVIEW -->
    <div class="min-h-screen flex justify-center items-center relative">

        <div class="montserrat-black text-50">
            Welkom! Bij de Module.
        </div>

    </div>

    <!-- CONTENT WRAPPER -->
    <div class="w-screen flex justify-center">

        <module :data="{{ json_encode($module) }}"></module>

    </div>
@endsection


@section('additional-scripts')
@endsection
