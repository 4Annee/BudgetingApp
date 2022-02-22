<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coolcss/style.css">
    <link rel="stylesheet" href="coolcss/login.css">
    <title>login</title>
    <style>
        body{
            padding: 0;
            margin: 0;
            background: url('/bgImages/bg1.jpg') no-repeat;
            background-size: cover;
            
        }
        .mainpg{
            width:100vw;
            height:100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .formwrapper{
            background-color: white;
            padding: 1em 3em;
            border-radius: 12px;
            box-shadow: 1px 1px 8px 8px rgba(54, 54, 54, 0.103);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        input{
            padding: .8em .6em;
            border-radius: .8em;
            box-shadow: none;
            margin-left: 8px;
            width: 30em;
        }
        svg{
            margin: auto;
        }
    </style>
</head>
<body>
<div class="mainpg">
    <div class="formwrapper p-2">
        <h1 class="mb-1">Welcome Back !!</h1>
        <form action="check" method="get">
            @csrf
            <div class="bg-white rounded p-sm-2" style="display: flex;" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <input type="text" name="name" placeholder="Enter Your User Name">
            </div>
            <div class="bg-white rounded p-sm-2 " style="display: flex;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
            </svg>
            <input type="password" name="password" placeholder="Enter Your Password">
            <input type="hidden" name="redirectto" value="{{ $redirect }}">
            </div>
            <div class="pt-1">
                @if(session()->get('msg'))
                <p class="text-danger">{{session()->get('msg')}}</p>
                @endif
            </div> 
            <button type="submit" class="btn_lgn rounded mb-1"><b>Sign in</b></button> 
            <hr class="w-100 text-dark">
            <small><a href="#"><p class="text-primary text-center">Forget password ?</p></a></small>
            <small><a href="/register"><p class="text-primary text-center">You don't have an account? Sign up </p></a></small>
        </form> 
    </div>
</div>
</body>
</html>
