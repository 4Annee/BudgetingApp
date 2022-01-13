<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('coolcss/style.css') }}">
    <style>
        body,html{
            scroll-snap-type: y mandatory;
            padding: 0;
            margin: 0;
        }
        .snap-section{ 
            scroll-snap-align: start;
        }
    </style>
    <title>Home - ESIBudgeting</title>
</head>
<body>
    <div class="hero container snap-section">
        <div class="row">
            <div class="col-4" style="display:flex;flex-direction:column;justify-content: center;">
                <div>
                    <h1 class="title-1">Every Dinar Counts</h1>
                    <p class="mb-3 text-lg">Monitor your spending habits, improve them and save more.</p>
                    <a href="#" class="btn btn-primary text-light text-bold p-3 text-vlg">Get Started</a>
                </div>
            </div>
            <div class="col-8">
                <img style="width:100%;" src="{{ asset('images/homepage.jpg')}}" alt="Image"/>
            </div>
        </div>
    </div>
    <div class="hero container text-center snap-section">
        <div>
            <h1 class="title-1">Why Choose Us ?</h1>
            <div class="row">
                <div class="col-4 shadow-sm rounded-lg m-2 bg-light p-2">
                    <img class="w-75" src="{{ asset('images/trust.png') }}" alt="Trusted">
                    <h2>Trusted By Many</h2>
                    <p>Used by more than 10 000+ Users World Wide</p>
                </div>
                <div class="col-4 shadow-sm rounded-lg m-2 bg-light p-2">
                    <img class="w-75" src="{{ asset('images/plugin.png') }}" alt="Secure">
                    <h2>Features</h2>
                    <p>Only includes features you actually need</p>
                </div>
                <div class="col-4 shadow-sm rounded-lg m-2 bg-light p-2">
                    <img class="w-75" src="{{ asset('images/trust.png') }}" alt="Support">
                    <h2>24/7 Supprt</h2>
                    <p>Just give us a call and we'll respond immediatly</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hero container snap-section">
        <div class="row">
            <div class="col-4 p-2">
                <h1 class="text-bold">Functionalities :</h1>
                <h2 class="text-bolder">Track Your Spending</h2>
                <p>User can easilty track his spending habits, dividing them into categories.</p>
                <p>This allows the user to see where he should spend less, and see where most of his budget is going</p>
                <p>Users can also define a monthly limit for each of the categories and he'll be warned by email once suprassing that limit.</p>
            </div>
            <div class="col-8 p-2">
                <img alt="Imageofdashboard">
            </div>
        </div>
    </div>
    <div class="hero container text-center snap-section">
        <div>
            <h1 class="title-1 my-0 mb-sm-1">Service Pricing</h1>
            <div class="row mb-2">
                <div style="border:royalblue 2px solid;" class="col-4 m-2 p-2">
                    <p class="title-1 mb-0 text-bolder">9.99</p>
                    <small>$/Month</small>
                    <h2 class="mt-3">Basic Subscription</h2>
                    <ul class="text-left">
                        <li>100 Transactions Per Day</li>
                        <li>Up To 10 Accounts</li>
                        <li>Up To 5 Users</li>
                    </ul>
                </div>
                <div style="scale: 110%; background: linear-gradient(100deg, rgba(2,0,36,1) 0%, rgba(20,67,168,1) 100%);color:white;" class="col-4 shadow-sm m-2 text-white p-2">
                    <p class="m-0 text-success">Recommended</p>
                    <p class="title-1 mb-0 text-bolder">19.99</p>
                    <small>$/Month</small>
                    <h2 class="mt-3">Pro Subscription</h2>
                    <ul class="text-left">
                        <li>1000 Transactions Per Day</li>
                        <li>Up To 100 Accounts</li>
                        <li>Up To 20 Users</li>
                    </ul>
                </div>
                <div style="border:royalblue 2px solid;" class="col-4 m-2 p-2">
                    <p class="title-1 mb-0 text-bolder">TBD</p>
                    <small>$/Month</small>
                    <h2 class="mt-3">Enterprise</h2>
                    <ul class="text-left">
                        <li>Unlimited Transactions Per Day</li>
                        <li>Unlimited Accounts</li>
                        <li>Unlimited Users</li>
                    </ul>
                </div>
            </div>
            <a href="#" class="btn mt-2 btn-primary text-light text-bold p-3 text-vlg">Get Started</a>

        </div>
    </div>
</body>
</html>