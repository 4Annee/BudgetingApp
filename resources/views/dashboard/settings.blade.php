@extends('layouts.dashboard')
@section('DashboardContent')
    <section class="sett">
        <h1>Settings</h1>
        <div class="w-100 mt-sm-15 titlesContainer">
            <ul>
                <li><a href="#" class="active">Profile</a></li>
                <li><a href="/Cards">My Cards</a></li>
                <li><a href="/Help">Help</a></li>
                <li><a href="/About">About</a></li>
            </ul>
        </div>
    </section>
@endsection