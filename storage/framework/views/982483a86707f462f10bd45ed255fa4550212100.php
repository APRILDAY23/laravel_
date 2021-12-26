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

    <h1 id="head">Make an Announcement</h1>

    <form action="<?php echo e(route('save1')); ?>" method="POST">
        <?php if(Session::get('success')): ?> 
        <div id="mess">
            <?php echo e(Session::get('success')); ?>

        </div>
          
        <?php endif; ?>

        <?php if(Session::get('fail')): ?>
        <div id="mess">
            <?php echo e(Session::get('fail')); ?>

        </div>
        
        <?php endif; ?>

        <?php echo csrf_field(); ?>

        
        <input type="text" name="title" placeholder="Enter The Titile" id="title">
        <input type="text" name="description" placeholder="Enter The Description" id="description">
        <input type="file" name="uploadFile" id="file">
        <button type="submit" id="post" >Post</button> 
   
        
    </form>
    <a href="admin"><button id="back">Back</button></a>
</body>
</html><?php /**PATH D:\XAMMP\htdocs\Larvaral_project\resources\views/announce.blade.php ENDPATH**/ ?>