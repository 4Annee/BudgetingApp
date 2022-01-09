<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="coolcss/style.css">
    <link rel="stylesheet" href="coolcss/style.scss">
    <link rel="stylesheet" href="coolcss/login.css">
    <title>login</title>
</head>
<body>
<table>
<th>
logo
</th>
<td>
<div class="bg-white rounded p-sm-5 px-15 m-sm-4">
<h1 class="text-center"> Sign in to your account </h1> 
<br>
<div class="ml-10 ">
<button class="btn-dark btn rounded px-4 p-sm-2  ">Sign in</button>
<button class="btn-dark btn rounded px-4 p-sm-2 ">Sign up</button>
</div>
<div class="rounded bg-light  px-4 p-sm-2 ">
<form action="check" methode="get">
    @csrf
    <br><br>
    <div class="bg-white rounded p-sm-2 ">
    <input  type="text" name="name" placeholder="enter user name">
    </div> <br>
    <div class="bg-white rounded p-sm-2 ">
    <input type="password" name="password" placeholder="enter user password">
    </div> <br> <br>
    <a href=""><p class="text-center">Forget password ?</p></a><br>
    <button type="submit" class="btn rounded px-4 p-sm-2 ml-10 " width="899PX">login</button>
</form> 

<div class="pt-1">
@if(session()->get('msg'))
<p class="text-danger">{{session()->get('msg')}}</p>
@endif
</div>
</div>
</div>
</td>
</table>
</body>
</html>
