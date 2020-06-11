@extends('master')

@section('styles')
@endsection

@section('content')

    <!-- MENU -->
    <component-menu></component-menu>

    <!-- MENU SHAPE -->
    <!-- <element-separator class="text-green-light"></element-separator> -->

    <!-- LANDING -->
    <wrapper class="mt-25">

        <container class="flex-col-reverse laptop:flex-row-reverse">

            <!-- image placeholder -->
            <div class="w-full tablet-landscape:w-3/4 laptop:w-1/2 desktop:w-1/2 h-full">
                <img data-emergence="hidden" data-animation="animated fadeInUp" src="{{ asset('/assets/landing-images/zakelijk.png') }}">
            </div>

            <div class="w-full laptop:w-1/2 desktop:w-1/2 h-full flex flex-col justify-center items-center">

                <!-- PAGE TITLE -->
                <element-heading class="text-green-light">Mijn Werk</element-heading>

                <element-paragraph class="tablet-landscape:text-25 tablet-landscape:text-center laptop:text-25">Welkom op mijn website! Hier vindt u informatie over mijn werkaanpak en werkverleden. Uiteraard ben ik altijd bereid een en ander toe te lichten tijdens een kop koffie. En nu u hier toch bent, klik ook eens op ‘mens’ en laat je inspireren!</element-paragraph>

            </div>

        </container>

    </wrapper>

    <!-- SKILLS -->
    <wrapper class="-my-50 laptop:-my-150 desktop:-my-200">

        <element-separator v-bind:is-flipped="true" class="text-green-light"></element-separator>

        <div class="w-full flex flex-col items-center bg-green-light pb-50 desktop:py-100">

            <container class="flex-col tablet-portrait:flex-row">

                <!-- SKILLS -->
                <element-heading-two class="text-white">Competentie</element-heading-two>
                @foreach($skills as $skill)
                <component-skill :skill="{{ $skill }}"></component-skill>
                @endforeach

                <!-- REFERENCES -->
                <element-heading-two class="text-white">Mijn Ervaring</element-heading-two>
                @foreach($references as $reference)
                <component-reference :reference="{{ $reference }}"></component-reference>
                @endforeach

            </container>

        </div>

        <element-separator class="text-green-light"></element-separator>

        <container class="min-h-screen">
            <component-explore-more class="text-green-light"></component-explore-more>
            <component-contact :contact="{{ $contact }}" class="text-green-light"></component-contact>
        </container>

        <element-separator class="text-green-light" :is-flipped="true"></element-separator>

        <component-footer class="bg-green-light" :contact="{{ $contact }}"></component-footer>

    </wrapper>

@endsection

@section('scripts')
@endsection
