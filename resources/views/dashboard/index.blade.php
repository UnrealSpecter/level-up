@extends('app')

@section('content')
    <dashboard :user="{{ $user }}"></dashboard>
@endsection
