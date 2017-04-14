<?php
        define('HOST','localhost');
        define('USER','wifidog');
        define('PASS','dogisworking');
        define('DB','wifidog');

        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

        if($_SERVER['REQUEST_METHOD']=='POST'){
                //Getting values 
                $username = $_POST['uname'];
                $password = $_POST['pwd'];

                //Creating sql query
                $sql = "SELECT * FROM login WHERE uname='$username' AND pwd='$password'";

                //importing dbConnect.php script 


                //executing query
                $result = mysqli_query($con,$sql);

//fetching result
                $check = mysqli_fetch_array($result);

                //if we got some result 
                if(isset($check)){
                        //displaying success 
                        echo "success";
                }else{
                        //displaying failure
                        echo "failure";
                }
                mysqli_close($con);
        }

