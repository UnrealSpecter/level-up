@extends('app')

@section('content')
    <levels :levels="{{ json_encode($levels) }}"></levels>
@endsection
