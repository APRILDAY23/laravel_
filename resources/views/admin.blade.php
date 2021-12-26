    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
    </head>

    <style>
        #table1,
            td,
            th {
                width: 400px;
                border: 1px solid black;
                text-align: center;
            }
            #table {
                position: absolute;
                left:35%;
                top: 20%;
                width: 60%;
            }

            #table2 {
                position: absolute;
                top: 35%;
                left: 20%;
            }

            #announce {
                position: absolute;
                background-color: lightgreen;
                border: none;
            }
            
            #announce:hover {
                cursor: pointer;
                background: darkgreen;
            }
    </style>
    <body>
        <h1>Admin Page</h1>
        <a href="/announce"><button id="announce">+ Add A Announcement</button></a>

        <div id="table">
            <table id="table1">
                <thead>
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

        <div id="table2">
            <table>
                <thead>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <tr>
                    <?php
                    $connection = mysqli_connect('localhost' , 'veda_moola' , 'aprilday23' , 'laravel');

                        
                        $query = "SELECT * FROM posts";
			

                        $result = mysqli_query($connection, $query);
                       while( $row = mysqli_fetch_array($result)) {

                        $i =0;
                           

                        if($i%2 == 0) {
                            echo "<tr>";
                        } ?>
                        <td><?php echo $row['title']?></td> 
                                                
                                            
                                                
                        <td><?php echo $row['description']?></td>

                        <td><button>Delete</button>5</td>

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
    </body>
    </html>