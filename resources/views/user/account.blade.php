@extends('layout')

@section('content')
  @if (Auth::check())
    Hello, ...
  @else
    @include('user/login')
  @endif
@stop