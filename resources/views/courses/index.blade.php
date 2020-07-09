@extends('app')

@section('content')
    <courses :courses="{{ json_encode($courses) }}"></course>
@endsection
