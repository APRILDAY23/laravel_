<?php
//use App\Http\Controllers\ViewController;

// echo '<div>';
// echo '<p id="title">Hello User</p>';
// echo '<button id="login" href='{route('login')}'>Login</button></a>';
// echo '</div>';



?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<style>
    #title {
        position: absolute;
        left: 44%;
        top: 35%;
        font-size: 220%;
    }

    #login {
        position: absolute;
        left: 44%;
        top: 47%;
        border: 1px black solid;
        font-size: 100%;
        background-color: transparent;
    }

    #login:hover {
        cursor: pointer;
        background-color: lightgrey;
    }

    #sign_up {
        position: absolute;
        left: 49%;
        top: 47%;
        border: 1px black solid;
        font-size: 100%;
        background-color: transparent;
    }

    #sign_up:hover {
        cursor: pointer;
        background-color: lightgrey;
    }
</style>
<body>
    <div>
        <p id="title"><span class="auto-input"></p>
        <a href="/login"><button id="login">Login</button></a>
        <a href="/sign"><button id="sign_up">Sign Up</button></a>

        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <script>
            var typed = new Typed(".auto-input", {
                strings: ["Hello User", "How are you?" , "Lets do some coding"],
                typeSpeed: 100,
                loop: true
            })
        </script>
        </div>
</body>
</html>
