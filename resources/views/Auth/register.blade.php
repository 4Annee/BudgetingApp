<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('coolcss/style.css') }}">
    
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:'Poppins', sans-serif;
        }
        body {
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        }
        .wrapper{
            max-width: 400px;
            width:100%;
            padding: 25px 30px ;
            border: 1px solid black;
            border-radius: 5px;
            box-shadow: 80px 40px 80px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .wrapper .title{
            font-size: 25px;
            font-weight: 500;
            position: relative;
            margin-bottom: 15px;
        }
        .wrapper .title::before{
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            height: 4px;
            width:200px;
            background: linear-gradient(135deg,#71b7e6,#9659b6);
        }
        .wrapper form{1
            display: flex;
            flex-wrap: wrap;
        }
        form input{
            height: 45px;
            width: 100%;
            margin: 10px 0 12px 0;
            font-size: 16px;
            border-bottom-width: 4px;
            transition: all 1.5s ease;
        }
        form label{
            font-weight: 500;
            margin-bottom: 5px;
        }        
        form input:focus{
            border-color: #9659b6;
        }
        form .button{
            height: 20px;
            margin: 20px 20px 50px 20px;
        }
        form .button input{
            height: 100%;
            width: 100%;
            outline: none;
            padding: 15px 15px 25px 15px;
            text-align: center;
        }
        form .button input:hover{
            color:#9659b6; 
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="title">REGISTER HERE</div>        
        <form action="{{route('register')}}" method="post">
                @csrf
                <div class="mb-1">
                    <label for="name" class="sr-only">Name</label><br>
                    <input type="text" name="name" id="name" placeholder="Enter Your name" class="bg-gray-100 border-2 w-full p-1 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-1 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-1">
                    <label for="username" class="sr-only">Username</label><br>
                    <input type="text" name="username" id="username" placeholder="Enter Your Username" class="bg-gray-100 border-2 w-full p-1 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">

                    @error('username')
                        <div class="text-red-500 mt-1 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-1">
                    <label for="email" class="sr-only">Email</label><br>
                    <input type="text" name="email" id="email" placeholder="Enter Your email" class="bg-gray-100 border-2 w-full p-1 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-1 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-1">
                    <label for="password" class="sr-only">Password</label><br>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-1 rounded-lg @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-1 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-1">
                    <label for="password_confirmation" class="sr-only">Password again</label><br>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-1 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">

                    @error('password_confirmation')
                        <div class="text-red-500 mt-1 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="button">
                    <input type="submit" value="Register"class="bg-blue text-white rounded font-medium w-full">
                </div>
            </form>
  </div>
</div>	



</body>
</html>