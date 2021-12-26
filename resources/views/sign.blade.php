<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>

<style>
    #div1 {
    position: absolute;
    left: 37%;
    top: 15%;
    width: 350px;
    height: 70%;
    background-color: white;
    box-shadow: 0px 5px 10px 10px grey;
    border-radius: 4%;
    -webkit-border-radius: 4%;
    -moz-border-radius: 4%;
    -ms-border-radius: 4%;
    -o-border-radius: 4%;
}



#first_name_text {
    position: absolute;
    top: 10%;
    left: 20%;
}

#first_name {
    position: absolute;
    top: 18%;
    left: 20%;
}

#last_name_text {
    position: absolute;
    top: 22%;
    left: 20%;
}

#last_name {
    position: absolute;
    top: 30%;
    left: 20%;
}

#email_text {
    position: absolute;
    top: 33%;
    left: 20%;
}

#email {
    position: absolute;
    top: 41%;
    left: 20%;
}

#pwd_text {
    position: absolute;
    top: 45%;
    left: 20%;
}

#password {
    position: absolute;
    top: 53%;
    left: 20%;
}

#cfm_pwd_text {
    position: absolute;
    top: 56%;
    left: 20%;
}

#password1 {
    position: absolute;
    top: 64%;
    left: 20%;
}

#button_signup {
    position: absolute;
    left: 36%;
    top: 80%;
    border: 1px black solid;
    background-color: transparent;
    font-size: 15px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

#button_signup:hover {
    cursor: pointer;
    background-color: lightgray;
}

#signup_text {
    position: absolute;
    top: 1%;
    left: 38%;
    font-weight: bold;
    font-size: 130%;
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

        #mess {
            position: absolute;
            top: 10%;
            color: red;
        }
</style>
<body>
    <a href="/" id="back">Back to Home</a>
    <div id="div1">    
            <form action="{{ route('save') }}" method="POST">
                @if (Session::get('success')) 
                <div id="mess">
                    {{ Session::get('success') }}
                </div>
                  
                @endif

                @if (Session::get('fail'))
                <div id="mess">
                    {{ Session::get('fail') }}
                </div>
                
                @endif

                @csrf    
         
            <p id="signup_text"> Sign Up</p>
    
            <p id="first_name_text">First Name</p>
            <input type="text" name="fname" placeholder="Enter First Name" id="first_name" >
            <span class="span">@error('fname'){{ $message }}@enderror</span>
    
              <p id="last_name_text">Last Name</p>
             <input type="text" name="lname" placeholder="Enter Last Name" id="last_name" >
             <span class="span">@error('lname'){{ $message }}@enderror</span>
    
             <p id="email_text">Email</p>
             <input type="text" name="email" placeholder="Enter Email Address" id="email" >
             <span class="span">@error('email'){{ $message }}@enderror</span>
    
             <p id="pwd_text">Password</p> 
            <input type="password" name="pwd" placeholder="Enter Password" id="password" >
            <span class="span">@error('pwd'){{ $message }}@enderror</span>
    
    
    
            <button type="submit" id="button_signup" >Sign Up</button> 
            </form>
        </div>
    
</body>
</html>