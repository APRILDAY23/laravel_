
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make An Announcement</title>
</head>
<style>
    #head{
        position: absolute;
        left: 40%;
        font-size: 150%;
    }

    #title{
        position: absolute;
        top: 20%;
        left: 25%;
        width: 50%;
        height: 8%;
        text-align: center;
        font-size: 120%;
    }

    #description {
        position: absolute;
        top: 30%;
        left: 25%;
        width:50%;
        height: 20%;
        text-align: center;
        font-size: 120%;
    }

    #file {
        position: absolute;
        top: 50%;
        left: 25%;
    }

    #post {
        position: absolute;
        top: 55%;
        left: 25%;
        width: 8%;
        height: 5%;
        background-color: lightgreen;
        border: none;
    }

    #post:hover {
        cursor: pointer;
        background-color: darkgreen;
    }

    #back{
        position: absolute;
        left: 25%;
        top: 61%;
        width: 8%;
        height: 5%;
        border: none;
        background-color: lightgreen;
    }

    #back:hover {
        cursor: pointer;
        background-color: darkgreen;
    }

    #mess {
            position: absolute;
            top: 10%;
            color: red;
        }
</style>
<body>

    <h1 id="head">Edit</h1>

    <form action="{{ route('update') }}" method="POST">
        {{-- @if (Session::get('success')) 
        <div id="mess">
            {{ Session::get('success') }}
        </div>
          
        @endif

        @if (Session::get('fail'))
        <div id="mess">
            {{ Session::get('fail') }}
        </div>
        
        @endif --}}

        @csrf
       

        <input type="hidden" name="id" value={{ $data['id'] }}>        
        <input type="text" name="title1" placeholder="Enter The Title" id="title" value="{{ $data['title'] }}">
        <input type="text" name="description1" placeholder="Enter The Description" id="description" value="{{ $data['description'] }}">
        <input type="file" name="uploadFile1" id="file" value="{{ $data['pic'] }}">
        <button type="submit" id="post" >Update</button> 
   
        
    </form>
    <a href="{{ route('admin') }}"><button id="back">Back</button></a>
</body>
</html>