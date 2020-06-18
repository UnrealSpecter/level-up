@extends('master')

@section('additional-styles')
@endsection

@section('content')

    <div class="min-h-screen flex justify-center items-center">

        <div id="menu" class="h-100 w-screen fixed top-0 left-0 shadow-lg bg-white flex justify-between px-50 items-center montserrat-bold uppercase">
            <a href="/">Level Up!</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
            </form>
        </div>

        <div class="montserrat-black text-50 text-center">
            welkom! <br /> {{ $user->name }}
        </div>

    </div>

    <!-- CONTENT WRAPPER -->
    <div class="w-screen flex justify-center">

        <!-- MODULE CONTAINER -->
        <div class="w-3/4 flex flex-col items-center">

            @foreach($user->levels as $index => $level)
            <div class="rounded-20 px-100 w-full mb-50 h-200 bg-black text-white flex justify-center items-center montserrat-bold text-50 truncate whitespace-no-wrap">
                {{ $level->title }}
            </div>
            <div class="w-full p-50 grid gap-50 grid-cols-3">
                @foreach($level->modules as $module)
                 <div class="module rounded-20 p-25 h-300 shadow-md text-black flex flex-col items-center justify-center">
                     {{ $module->title }}
                     <a href="{{ route('module-page', [$module->id]) }}">start module</a>
                 </div>
                @endforeach
            </div>
            @endforeach

        </div>

    </div>
@endsection


@section('additional-scripts')
@endsection
