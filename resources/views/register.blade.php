<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/css/style1.css">

    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <form action="{{route('registered')}}" method="post" class="login-email">
            
            @csrf
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            @if(Session::has('Success'))
<div class="alert alert-success">{{Session::get('Success')}}</div>
            @endif
            @if(Session::has('fail'))
<div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="{{old('username')}}" required>
                            </div>
            @if ($errors->has('username'))
    
      <span class="alert alert-danger">@error('username') {{$message}} @enderror</span><br><br>


 @endif
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="{{old('email')}}" required>
                
            </div>
            @if ($errors->has('email'))
    
      <span class="alert alert-danger">@error('email') {{$message}} @enderror</span><br><br><br><br>


 @endif
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" required><br>
                
                
            </div>
            @if ($errors->has('password'))
    
      <span class="alert text-danger">@error('password') {{$message}} @enderror</span><br><br><br><br>

 @endif

            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
                
                
         </div>
            @if ($errors->has('cpassword'))
    
      <span class="alert alert-danger">@error('cpassword') {{$message}} @enderror</span><br><br><br><br>


 @endif
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="/login">Login Here</a>.</p>
        </form>
    </div>
</body>
</html>