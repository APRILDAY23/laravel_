<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<style>
     #div1 {
            position: absolute;
            left: 37%;
            top: 30%;
            width: 350px;
            height: 60%;
            background-color: white;
            box-shadow: 0px 5px 10px 10px grey;
            border-radius: 4%;
            -webkit-border-radius: 4%;
            -moz-border-radius: 4%;
            -ms-border-radius: 4%;
            -o-border-radius: 4%;
        }

        #back {
            position: absolute;
            left: 90%;
            font-size: 130%;
            text-decoration: none;
            color: black;
        }

        #back:hover {
            cursor: pointer;
            color: lightgray;
        }

        #login_text {
            position: absolute;
            left: 41%;
            top: 10%;
            font-size: 130%;
        }
        
        #home_return_login {
            position: relative;
            background-color: transparent;
            top: 20px;
            left: 90%;
            font-size: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            border: none;
        }
        
        #home_return_login:hover {
            position: relative;
            cursor: pointer;
            color: lightgray;
        }
        
        #header_image_login {
            position: relative;
            max-height: 15%;
            top: 8%;
            left: 23%;
        }
        
        #email {
            position: absolute;
            top: 30%;
            left: 25%;
            font: bold;
        }
        
        #emailaddress_login {
            position: absolute;
            top: 40%;
            left: 25%;
        }
        
        #password {
            position: absolute;
            top: 50%;
            left: 25%;
        }
        
        #password_login {
            position: absolute;
            top: 60%;
            left: 25%;
        }
        
        #button_login {
            position: absolute;
            left: 43%;
            top: 68%;
            border: none;
            background-color: transparent;
            font-size: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        
        #button_login:hover {
            cursor: pointer;
            background-color: lightgray;
        }
        
        #forgot_password_link {
            position: absolute;
            top: 83.5%;
            left: 25%;
            width: 60%;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        
        #forgot_password_link:hover {
            cursor: pointer;
            color: lightgray;
        }
        
        #singup_link {
            position: absolute;
            left: 25%;
            top: 88%;
            width: 80%;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        
        #singup_link:hover {
            cursor: pointer;
            color: lightgray;
        }

        #mess {
            position: absolute;
            top: 10%;
            left: 30%;
            color: red;
        }
</style>
<body>
    <a href="/" id="back">Back to Home</a>
    <div id="div1">

        
    
        

        <form action="{{ route('check') }}"  method="POST">

            @if (Session::get('fail'))
            <div id="mess">
                {{ Session::get('fail') }}
            </div>
            
            @endif



            @csrf
        <p id="email">Email Address</p>
        <input type="text" name="email" placeholder="Enter Email Address" id="emailaddress_login">
        <span class="span">@error('email'){{ $message }}@enderror</span>
        <p id="password">Password</p>
        <input type="password" name="password" placeholder="Enter Password" id="password_login" >
        <span class="span">@error('password'){{ $message }}@enderror</span>

        <button type="submit" id="button_login" >Login</button>
        <p id="login_text">Login</p>

        <a href="{{ route('signup') }}" id="singup_link">Create a New Account?</a>
            
        </form>
    </div>
    
</body>
</html>