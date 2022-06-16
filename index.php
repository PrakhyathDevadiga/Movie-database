<?php
    $server = "localhost";  //name of the server
    $user = "root";         //name of the user
    $password = "";         //empty password
    $db = "db_movies";     //database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)              
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('Super 30' , 'Hrithik', 'Krithi' , 'Vikas' , 2019),
                                                                                 ('Spiderman 3' , 'Tom' , 'Zendeya' , 'Jon' , 2022),
		    								 ('Krrish 3' , 'Hrithik' , 'Kangana' , 'Rakesh' , 2013),
									         ('Don' , 'Shahrukh' , 'Priyanka' , 'Akhtar' , 2006),
										 ('Uncharted' , 'Tom' , 'Sophia' , 'Ruben' , 2022),
									         ('Bajrangi Bhaijan' , 'Salman' , 'Kareena' , 'Kabir' , 2015),
										 ('Rajakumar' , 'Puneet' , 'Priya' , 'Santhosh' , 2021)";       //query

             $insert = mysqli_query($conn,$sql);                    
             echo '<script type="text/javascript">';
                echo 'alert("Movies added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>