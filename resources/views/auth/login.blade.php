@extends('app')

@section('content')

        <container>

            <!-- login form -->
            <form class="w-1/2 flex flex-col rounded-5 overflow-hidden shadow-lg" method="POST" action="{{ route('login') }}">

                <!-- HEADING -->
                <div class="w-full flex flex-col justify-center items-center bg-black text-white p-50">
                    <h1 class="text-75 montserrat-bold mb-25">Level Up!</h1>
                    <h2 class="montserrat-regular text-25 border-white">Dashboard Login</h2>
                </div>

                <!-- LOGIN FIELDS -->
                <div class="p-50 flex flex-col">

                    <!-- CSRF -->
                    @csrf

                    <!-- EMAIL -->
                    <div class="w-full flex flex-col items-center mb-25">
                        <div class="w-full flex flex-row flex-no-wrap h-75 shadow-md rounded-5 overflow-hidden">
                            <div class="flex justify-center items-center label h-full w-3/5 text-white bg-black montserrat-bold">Email</div>
                            <input placeholder="voorbeeld: info@dhevak.nl" id="email" type="email" class="flex justify-center items-center h-full w-2/5 outline-none montserrat-regular text-20 w-full px-25" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        @error('email')
                        <span class="mt-10 w-full flex justify-center items-center h-75 bg-red-400 shadow-md rounded-5 text-white montserrat-bold">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- PASSWORD -->
                    <div class="w-full flex flex-row flex-no-wrap items-center mb-25">
                        <div class="w-full flex flex-row flex-no-wrap h-75 shadow-md rounded-5 overflow-hidden">
                            <div class="flex justify-center items-center label h-full w-3/5 text-white bg-black montserrat-bold">Wachtwoord</div>
                            <input id="password" type="password" class="flex h-full justify-center items-center h-full w-2/5 outline-none montserrat-regular text-20 w-full px-25" name="password" required autocomplete="current-password">
                        </div>
                        @error('password')
                        <span class="mt-10 w-full flex justify-center items-center h-75 bg-red-400 shadow-md rounded-5 text-white montserrat-bold">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- SUBMIT -->
                    <div class="w-full flex flex-row flex-no-wrap justify-center items-center rounded-5 overflow-hidden h-75">
                        <button class="shadow-md text-15 h-full rounded-5 w-1/2 mr-25 h-50 hadow flex justify-center items-center montserrat-bold text-white bg-black" type="submit">inloggen</button>
                        <!-- FORGOTTEN PASSWORD -->
                        @if (Route::has('password.request'))
                        <!-- <a class="text-15 h-full rounded-5 w-1/2 h-50 shadow flex justify-center items-center montserrat-bold text-white bg-black" href="{{ route('password.request') }}">
                            Wachtwoord vergeten?
                        </a> -->
                        @endif
                    </div>
                </div>

            </form>

        </container>

@endsection
