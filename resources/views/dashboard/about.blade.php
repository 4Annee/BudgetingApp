@extends('layouts.dashboard')
@section('DashboardContent')
    <section class="sett">
        <h1>Settings</h1>
        <div class="w-100 mt-sm-15 titlesContainer">
            <ul>
                <li><a href="/Settings">Profile</a></li>
                <li><a href="/Cards">My Cards</a></li>
                <li><a href="/Help">Help</a></li>
                <li><a href="/About" class="active">About</a></li>
            </ul>
        </div>
        <div class="about1">
            <img src="{{asset('images/Development focus-pana.png')}}">
            <h2>About ESIBudgeting</h2>
            <p>
                ESIBudgeting is founded by a team of developers, with the purpose of making the process of dealing with money
                easier. This plateform was made specifically for those who need help with tracking their spendings and 
                savings.
                <br>
                Bank accounts, sometimes, when having more than one, are hard to maintain and manage, transfering money with,
                is harder. Tracking how much money you have, how much did you spend this week, what is your balance, and more 
                operations that get complicated along the way.
                <br>
                Thus, this website was an idea to facilitate managing with what you have, and with what you will have.
                <br>
            </p>
        </div>
        <div class="about2">
            <img src="{{asset('images/Design team-amico.png')}}">
            <h2>Our team</h2>
            <p>
                A team that's creative, cooperative and innovation driven. A team that's seeking more improvement 
                day by day and its only purpose is to facilitate the financial life for all users.
            </p>
        </div>
    </section>
@endsection