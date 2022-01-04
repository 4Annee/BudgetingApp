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
                    <img src="" alt="Trusted">
                    <h2>Trusted By Many</h2>
                    <p>Used by more than 10 000+ Users World Wide</p>
                </div>
                <div class="col-4 shadow-sm rounded-lg m-2 bg-light p-2">
                    <img src="" alt="Secure">
                    <h2>Features</h2>
                    <p>Only includes features you actually need</p>
                </div>
                <div class="col-4 shadow-sm rounded-lg m-2 bg-light p-2">
                    <img src="" alt="Support">
                    <h2>24/7 Supprt</h2>
                    <p>Just give us a call and we'll respond immediatly</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hero container text-center snap-section">
        <div class="row">
            <div class="col-4 p-2">
                <img class="w-100" src="" alt="Trusted">
            </div>
            <div class="col-8 p-2">
                <img src="" alt="Support">
                <h2>24/7 Supprt</h2>
                <p>Just give us a call and we'll respond immediatly</p>
            </div>
        </div>
    </div>
</body>
</html>