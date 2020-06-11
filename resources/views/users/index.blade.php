@extends('master')

@section('additional-styles')
@endsection

@section('content')
    username: {{ $users->first()->name }}

    <!-- CONTENT WRAPPER -->
    <div class="w-screen flex justify-center">

        <!-- MODULE CONTAINER -->
        <div class="w-3/4 flex flex-col items-center">

        @foreach($users->first()->lessons as $index => $lesson)

            <div class="montserrat-bold w-full rounded-20 h-150 bg-black text-white text-50 mb-50 px-50 flex items-center whitespace-no-wrap truncate">
                @if($lesson->pivot->is_done)
                <div class="h-75 w-75 mr-75 rounded-75 flex justify-center items-center text-black bg-white font-bold">
                    <!-- CHECKMARK SVG -->
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                    </svg>
                </div>
                @endif
                Lesson {{ $index + 1 }}: {{ $lesson->title}}
            </div>

            @foreach($lesson->subjects as $index => $subject)
                <div class="montserrat-regular w-full rounded-20 h-100 bg-white text-25 text-black mb-50 shadow-md px-50 flex justify-start items-center">

                    <!-- SUBJECT IS DONE -->
                    @if($subject->is_done)
                    <div class="h-50 w-50 mr-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                        <!-- CHECKMARK SVG -->
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                        </svg>
                    </div>

                    <!-- SUBJECT IS NOT DONE -->
                    @else
                    <div class="montserrat-bold h-50 w-50 mr-50 rounded-50 flex justify-center items-center text-white bg-black font-bold">
                        {{ $index + 1 }}
                    </div>
                    @endif
                     {{ $subject->title }}
                </div>

                <div class="subject-wrapper w-3/4 flex justify-start flex-col">

                    <!-- SUBJECT DESCRIPTION -->
                    <div class="w-full mb-50">
                        <div class="lesson-description-title montserrat-bold text-40 text-black mb-25">De Theorie</div>
                        <p class="lesson-description montserrat-regular text-20 text-black">{{ $subject->description }}</p>
                    </div>

                    <div id="resource-container" class="w-full grid grid-cols-3 gap-50 mb-50">
                        @foreach($subject->resources as $resource)
                            <div class="col-span-1 resource rounded-20 h-300 py-25 px-50 text-15 shadow-md flex flex-col">
                                <div class="title montserrat-bold text-center flex flex-col flex-grow justify-center items-center">
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
                                @if($assignment->is_done)
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

@endsection


@section('additional-scripts')
@endsection
