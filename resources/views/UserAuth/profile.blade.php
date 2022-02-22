@extends('layouts.dashboard')
@section('DashboardContent')
    <h1>hello {{$username}}</h1>
    <p><a href="{{ url('/logout') }}">logout</p> 
@endsection