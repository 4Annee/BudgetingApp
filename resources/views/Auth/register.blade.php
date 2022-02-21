<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('coolcss/style.css') }}">
    
    <style>
      body {
        background-image: 
        linear-gradient(.6turn, #E9D2F4,#9B9B93,#39393A);
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        
        }
        input {
        background-color : rgb(192, 200, 207);
        color : #000;
        margin: 5px 0 5px 0;
        padding: 10px 20px 10px 20px;
        }
        form{
           box-shadow: 0 40px 80px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
           padding: 50px 25px 50px 25px;
        }
        
    </style>
</head>
<body>
    <div class="wrapper">
      {{-- <div class="title">
      Registration Form
    </div> --}}
    <form action=""style="text-align: center; border: outset ;border-radius: 2%; margin-top: 25% ">
    <div class="form" method="GET" >
       <div class="inputfield">
          <label></label>
          <input type="text" class="input" placeholder="First Name">
       </div>  
        <div class="inputfield" class="p-2 ">
          <label></label>
          <input
              type="text"
              name="prenom"
              id="name"
              placeholder="Last Name"
              required
            />
          
       </div>  
       <div class="inputfield">
          <label></label>
          <input
              type="password"
              name="prenom"
              id="name"
              placeholder="Password"
              required
            />
          
       </div>  
      <div class="inputfield">
          <label></label>
             <input
              type="password"
              name="ConfirmPassword"
              placeholder="Confirm Password"
              id="ConfPass"
              required
            />
          
       </div> 
        <div class="inputfield ">
          <label>Gender :</label>
          <div class="custom_select" style="float: right">
            <select>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label></label>
          <input
              type="email"
              name="email"
              id="email"
              placeholder="Email Address"
              required
            /></div> 
      <div class="inputfield">
          <label></label>
          <input
              type="number"
              name="phone"
              placeholder="Phone Number"
              id="phone"
              required
            /></div> 
      <div class="inputfield">
          <label></label>
          <textarea class="textarea" placeholder="Address"></textarea>
       </div> 
      <div class="inputfield">
          <label></label>
          <input
              type="number"
              name="code"
              id="code"
              placeholder="Postal Code"
              required
            /></div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            </span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="regBtn">
      </div>
    
    </form>
  </div>
</div>	



</body>
</html>