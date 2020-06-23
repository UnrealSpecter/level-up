@extends('master')

@section('additional-styles')
@endsection

@section('content')

    <div id="menu" class="z-50 h-100 w-screen fixed top-0 left-0 shadow-lg bg-white flex justify-between px-50 items-center montserrat-bold uppercase">
        <a href="/">Level Up!</a>
        <a href="{{ route('dashboard-page') }}">Dashboard</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="hidden">
        {{ csrf_field() }}
        </form>
    </div>

    <div class="min-h-screen flex justify-center items-center">

        <div class="montserrat-black text-50 text-center">
            welkom! <br /> {{ $user->name }}
        </div>

    </div>

    <!-- CONTENT WRAPPER -->
    <div class="w-screen flex justify-center">

        <!-- MODULE CONTAINER -->
        <div class="w-3/4 flex flex-col items-center">

            <h1 class="text-50 mb-50 ">Level Overview</h1>
            @foreach($user->levels as $index => $level)
            <level :index="{{ json_encode($index + 1) }}" :level="{{ $level }}"></level>
            @endforeach

            <h1 class="text-50 mb-50 ">Course Overview</h1>
            @foreach($courses as $index => $course)
            <course :index="{{ json_encode($index + 1) }}" :course="{{ $course }}"></course>
            @endforeach

        </div>

    </div>
@endsection


@section('additional-scripts')
@endsection
