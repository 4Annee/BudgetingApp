<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coolcss/style.css">
    <link rel="stylesheet" href="coolcss/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  
    
    <title>login</title>
</head>
<body>

<table >
<td>
<div class="bg-white rounded hero">
<div>
<br><br><h1 class="text-center"> Sign in to your <br>Budgeting app account </h1> <br>

<div class="bg-info rounded px-2  ">
<form action="check" methode="get">
    @csrf
    <br><br><br>

    <div class="bg-white rounded p-sm-2" style="display: flex;" >
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    </svg> &nbsp;
    <input  type="text" name="name" placeholder=" Enter user name">
    </div> <br><br>
    <div class="bg-white rounded p-sm-2 " style="display: flex;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
    </svg>&nbsp;
    <input type="password" name="password" placeholder="Enter user password">
    </div>
    <div class="pt-1">
        @if(session()->get('msg'))
        <p class="text-danger">{{session()->get('msg')}}</p>
        @endif
    </div> 
    <button type="submit" class="btn_lgn rounded"><b>Sign in</b></button> 
    <a href=""><p class="text-center">Forget password ?</p></a><br><br>
    <a href=""><p class="text-center">You don't have an account? Sign up </p></a>
    <br><br><br><br>
</form> 

</div>
</div>
</div>
</td>
</table>
</div>

</body>
</html>
