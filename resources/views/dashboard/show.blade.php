@extends('master')

@section('additional-styles')
@endsection

@section('content')

    <div class="min-h-screen flex justify-center items-center z-50 relative">

        <div id="menu" class="h-100 w-screen fixed top-0 left-0 shadow-lg bg-white flex justify-between px-50 items-center montserrat-bold uppercase">
            <a href="/">Level Up!</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="hidden">
            {{ csrf_field() }}
            </form>
        </div>

        <div class="montserrat-black text-50">
            Welkom! Bij de Module. {{ $module->title }}
        </div>

    </div>

    <!-- CONTENT WRAPPER -->
    <div class="w-screen flex justify-center">

        <!-- MODULE CONTAINER -->
        <div class="w-3/4 flex flex-col items-center relative">

            <!-- PROGRESSION LINE -->
            <div class="w-1/6 h-full absolute left-0 top-0 flex justify-center z-0">
                <div id="decorative-line" class="bg-black h-full w-20"></div>
            </div>

            <!-- LESSON CONTENT -->
            <div class="w-full z-10 flex flex-col items-end">

                @foreach($module->lessons as $index => $lesson)

                    <div class="montserrat-bold w-full rounded-20 h-200 bg-black text-white text-50 mb-50 flex flex-row flex-no-wrap items-center whitespace-no-wrap truncate">

                        <!-- CHECKMARK AND LESSON NUMBER CONTAINER -->
                        <div class="h-full w-1/6 flex justify-center items-center">
                            <!-- SHOW CHECKMARK -->
                            @if($lesson->pivot->is_done)
                            <div class="h-100 w-100 rounded-100 flex justify-center items-center text-black bg-white font-bold">
                                <!-- CHECKMARK SVG -->
                                <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                                </svg>
                            </div>
                            <!-- SHOW LESSON NUMBER -->
                            @else
                            <div class="h-100 w-100 rounded-100 flex justify-center items-center text-black bg-white font-bold">
                                {{ $index + 1 }}
                            </div>
                            @endif
                        </div>

                        <!-- LESSON TITLE -->
                        <div class="w-4/6 truncate">
                            {{ $lesson->title }}
                        </div>

                    </div>

                    @foreach($lesson->subjects as $index => $subject)
                        <div class="montserrat-regular w-full rounded-20 h-100 bg-white text-25 text-black mb-50 shadow-md flex justify-start items-center">

                            <div class="h-full w-1/6 flex justify-center items-center">
                                <!-- SUBJECT IS DONE -->
                                @if($subject->pivot->is_done)
                                <div class="h-50 w-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                                    <!-- CHECKMARK SVG -->
                                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                                    </svg>
                                </div>
                                <!-- SUBJECT IS NOT DONE -->
                                @else
                                <div class="montserrat-bold h-50 w-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                                    {{ $index + 1 }}
                                </div>
                                @endif
                            </div>

                            <div class="w-4/6 truncate">
                                {{ $subject->title }}
                            </div>
                        </div>

                        <div class="subject-wrapper w-5/6 flex justify-start flex-col">

                            <!-- SUBJECT DESCRIPTION -->
                            <div class="w-full mb-50">
                                <div class="lesson-description-title montserrat-bold text-40 text-black mb-25">De Theorie</div>
                                <p class="lesson-description montserrat-regular text-20 text-black">{{ $subject->description }}</p>
                            </div>

                            <div id="resource-container" class="w-full grid grid-cols-3 gap-50 mb-50">
                                @foreach($subject->resources as $resource)
                                    <div class="col-span-1 resource rounded-20 h-300 py-25 px-50 text-15 shadow-md flex flex-col">
                                        <div class="title montserrat-bold text-center flex flex-col flex-grow justify-center items-center">
                                            @foreach($resource->tags as $tag)
                                            <img src="{{ asset('/assets/icons/' . $tag->icon ) }}" class="w-25">
                                            {{ $tag->label }}
                                            @endforeach
                                            <div class="likes w-full montserrat-regular text-center mb-25">{{ $loop->iteration }} likes</div>
                                            {{ $resource->title }}
                                        </div>
                                        <a href="{{ $resource->link}}" target="_blank" class="w-full rounded-20 h-50 shadow-md flex justify-center items-center uppercase font-bold text-white bg-black">start</a>
                                    </div>
                                @endforeach
                            </div>

                            <!-- ASSIGNMENT DESCRIPTION -->
                            <div class="w-full mb-50">
                                <div class="lesson-description-title montserrat-bold text-40 text-black mb-25">De Opdrachten</div>
                                <p class="lesson-description montserrat-regular text-20 text-black">Hier zou nog een uitgebreide inleiding kunnen komen bij de opdrachten die horen bij deze les. Zoals tips of hints of aandachtspunten.</p>
                            </div>

                            <div id="assignment-wrapper" class="w-full">

                                @foreach($subject->assignments as $assignment)
                                <div class="assignment w-full flex flex-col justify-center">

                                    <!-- ASSIGNMENT HEADER -->
                                    <div class="montserrat-regular w-full rounded-20 h-100 bg-white text-25 text-black mb-50 shadow-md px-50 flex justify-start items-center">

                                        <!-- ASSIGNMENT IS DONE -->
                                        @if($assignment->pivot->is_done)
                                        <div class="h-50 w-50 mr-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                                            <!-- CHECKMARK SVG -->
                                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                                            </svg>
                                        </div>

                                        <!-- ASSIGNMENT IS NOT DONE -->
                                        @else
                                        <div class="montserrat-bold h-50 w-50 mr-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                                            {{ $index + 1 }}
                                        </div>
                                        @endif
                                        Assignment {{ $index + 1 }}
                                    </div>

                                    <!-- ASSIGNMENT DESCRIPTION -->
                                    <div class="w-full mb-50">
                                        <div class="lesson-description-title montserrat-bold text-40 text-black mb-25">{{ $assignment->question }}</div>
                                        <p class="lesson-description montserrat-regular text-20 text-black">Hier zou nog een uitgebreide inleiding kunnen komen bij de opdrachten die horen bij deze les. Zoals tips of hints of aandachtspunten.</p>
                                    </div>

                                    <!-- ASSIGNMENT ANSWERS -->
                                    <div class="multiple-choice-assignment mb-50 p-50 shadow-md rounded-20">
                                        <div class="assignment-question montserrat-bold text-25">Multiple Choice:</div>
                                        <div class="assignment-question montserrat-regular mb-25 text-20">{{ $assignment->question }}</div>
                                        <div class="answers flex flex-col">
                                            @foreach($assignment->answers as $answer)
                                                <div class="asnwer montserrat-bold text-15">
                                                    <input class="mr-50" type="radio" value="{{ $answer->answer}}">
                                                    {{ $answer->answer }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>

                        </div>

                    @endforeach

                @endforeach
            </div>


        </div>

    </div>
@endsection


@section('additional-scripts')
@endsection
