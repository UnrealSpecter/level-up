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

        <!-- MODULE CONTAINER -->
        <div class="w-3/4 flex flex-col items-center">

            <introduction :introduction="{{ $module->introduction }}">
                {!! $module->introduction->body !!}
            </introduction>

            <!-- LESSON CONTENT -->
            <div class="w-full flex flex-col items-end relative">

                <!-- PROGRESSION LINE -->
                <div class="w-1/6 h-full absolute left-0 top-0 flex justify-center z-0 pb-50">
                    <div id="decorative-line" class="bg-black h-full w-20"></div>
                </div>

                @foreach($module->lessons as $index => $lesson)
                <lesson :index="{{ json_encode($index + 1) }}" :lesson="{{ json_encode($lesson) }}">
                    @foreach($lesson->subjects as $index => $subject)
                    <subject :index="{{ json_encode($index + 1) }}" :subject="{{ json_encode($subject) }}">

                        <!-- RESOURCES -->
                        <div class="flex flex-col">
                            <div class="resource-title montserrat-bold text-40 text-black mb-25">De Resources</div>
                            <div class="w-full grid grid-cols-3 gap-50 mb-50">
                                @foreach($subject->resources as $resource)
                                <resource :resource="{{ json_encode($resource) }}"></resource>
                                @endforeach
                            </div>
                        </div>

                        <!-- ASSIGNMENT DESCRIPTION -->
                        <div class="w-full mb-50">
                            <div class="lesson-description-title montserrat-bold text-40 text-black mb-25">De Opdrachten</div>
                            <p class="lesson-description montserrat-regular text-20 text-black">Hier zou nog een uitgebreide inleiding kunnen komen bij de opdrachten die horen bij deze les. Zoals tips of hints of aandachtspunten.</p>
                        </div>

                        <div id="assignment-wrapper" class="w-full">
                            @foreach($subject->assignments as $index => $assignment)
                            <assignment :index="{{ json_encode($index + 1) }}" :assignment="{{ json_encode($assignment) }}"></assignment>
                            @endforeach
                        </div>

                    </subject>
                    @endforeach
                </lesson>
                @endforeach
            </div>


        </div>

    </div>
@endsection


@section('additional-scripts')
@endsection
