@extends('app')

@section('content')
    <module :data="{{ json_encode($module) }}"></module>
@endsection
