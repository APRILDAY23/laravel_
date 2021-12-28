<?php
error_reporting(0);


?>    
    
    
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
    </head>

    <style>
        body {
            overflow-x: hidden;
            overflow-y: scroll;
        }
        #table1,
            td,
            th {
                width: 500px;
                border: 1px solid black;
                text-align: center;
            }
            #table {
                position: absolute;
                left:18%;
                top: 18%;
                width: 60%;
            }

            #table2 {
                position: absolute;
                top: 45%;
                left: 5%;
                width: 90%;
            }

            #announce {
                position: absolute;
                background-color: #24a0ed;
                width: 10%;
                top: 36%;
                left: 60%;
                height: 6%;
                border: none;
                border-radius: 5px;
                color: white;
                z-index: 1;
            }
            
            #announce:hover {
                cursor: pointer;
                background: grey;
                color: white;
            }

            @keyframes loadanimation_announce {
             from {
            opacity: 0;
            top: -50%;
            left: 60%;
            }
             to {
            opacity: 1;
            top: 36%%;
            left: 60%;
            }
            }

            #delete{
                
                background-color: red;
                color: white;
                border: none;
                width: 40%;
                left: 83%;
                margin-top: -1.4%;
                border-radius: 3px;
                
                
            }

            #delete:hover {
                cursor: pointer;
                background-color: white;
                color: red;
            }

            #edit {
                background-color: green;
                color: white;
                border: none;
                width: 30%;
                margin-top: -1.4%;
                border-radius: 3px;
            }

            #edit:hover {
                cursor: pointer;
                background-color: white;
                color: gray;
            }

            #box{
                position: absolute;
                width: 50%;
                height: 80%;
                left: 25%;
                background-color: lightgrey;
            }

            @keyframes loadanimation_box {
             from {
            opacity: 0;
            top: -50%;
            left: 25%;
            }
             to {
            opacity: 1;
            top: 9.5%;
            left: 25%;
            }
            }

            #user {
                position: absolute;
                left: 33%;
                top: 5%;
            }

            #thread {
                position: absolute;
                top: -10%;
                left: -30%;
                width: 150%;
            }

            #text {
                position: absolute;
                left: 15%;
                top: 30%;
            }

         

          

    </style>
    <body onload="myFunction()">
        <h1>Admin Page</h1>
        <a href="{{ route('announce') }}"><button id="announce">+ Add A Announcement</button></a>
<div id="box" loading="eager">
    <h1 id="user">User Information</h1>
        <div id="table">
          
            <table id="table1">
                <thead >
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $LoggedUserInfo['fname'] }}</td>
                        <td>{{ $LoggedUserInfo['lname'] }}</td>
                        <td>{{ $LoggedUserInfo['email'] }}</td>
                        <td><a href="{{ route('logout') }}">Logout</a></td>
                    </tr>
                </tbody>
            </table>

        </div>

        <h1 id="text">Announcement Information</h1>

        <div id="table2">
            <table>
                <thead id="">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Delete?</th>
                    <th>Edit?</th>
                </thead>
                <tbody >
                    <tr id="row">
                        <?php
                            $connection = mysqli_connect('localhost' , 'veda_moola' , 'aprilday23' , 'laravel');

                            $query = "SELECT * FROM posts";

                                
                            $result = mysqli_query($connection, $query);
                            while( $row = mysqli_fetch_array($result)) {
                            // $id = $row['id'];   

                            $i =0;
                                

                            if($i%2 == 0) {
                                echo "<tr>";
                            } ?>

                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['title']?></td> 
                         
                     
                         
                            <td><?php echo $row['description']?></td>
                                <form action="{{ url('delete/'.$row['id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <td><button id="delete">Delete</button></td>

                                        </form>

                                        <form action="{{ url('edit/'.$row['id']) }}" method="GET">
                                            @csrf

                                            <td><button id="edit">Edit</button></td>

                                        </form>
                                <?php
                                    if($i%3 == 2) {
                                    echo "</tr>";
                                    }
                                    $i++;
                                    }  
                                 ?> 
                                                        
                                                                        
                                                                            
                                                                            

                                                        
                    </tr>
                </tbody>
            </table>
        </div>

        <script> 
            function myFunction() {
               document.getElementById("box").style.animation = "loadanimation_box 1.5s ease 0.5s backwards";
               document.getElementById("announce").style.animation = "loadanimation_announce 1.5s ease 0.5s backwards";
               
            }
   </script>  
</div>
    </body>
    </html>