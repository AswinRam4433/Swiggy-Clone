<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "javatpoint";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 


<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?> 

<?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "swiggy";

                        // GETTING VALUES ENTERED BY THE USER
                        $enteredname=$_POST["username"];
                        $enteredpass=$_POST["password"];
                        $enteredmail=$_POST["email"];

                        $enteredmail=stripcslashes($enteredmail);
                        $enteredpass=stripcslashes($enteredpass);
                        $enteredname=stripcslashes($enteredname);

                        $enteredmail= mysqli_real_escape_string($con,$enteredmail);  
                        $enteredpass= mysqli_real_escape_string($con,$enteredpass);  
                        $enteredname= mysqli_real_escape_string($con,$enteredname);  
                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        else{
                            $sql = "select *from login where username = '$username' and password = '$password'";  
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  
                            
                            if($count == 1){  
                                include 'RestaurantsListNew.html'; 
                            }  
                            else{  
                                echo '<script>alert("Username Does Not Exist <br>Try Signing Up")</script>'; 
                                include 'JustSignUp.html';
                            }     
                        }

                        // $sql = "SELECT UNAME, MAIL, PASSW FROM users";
                        // $result = mysqli_query($conn, $sql);
                        // if($result){
                        //         // CHANGED THE IF CONDITION FROM 1<100
                        //         if($result->num_rows > 0){
                        //         // output data of each row
                        //                 while($row = mysqli_fetch_assoc($result)) {
                        //                     while()
                                            
                                            
                                            
                        //                     echo '
                        //                         <div class="hotels">
                        //                             <img class="hotel-image" src=" ' .$imageofdish .' "><br>
                        //                             <a class="hotels-name"> ' .$row["DISHNAME"]. ' </a><br>
                        //                             <a class="hotels-details "> ' .$row["PRICE"] .'</a><br>
                        //                             <a class="hotels-details" style="color:brown;font-size: 14px;">' .$row["DESCR"].'</a><br>
                        //                         </div>
                        //                         ';
                                               
                        //                     }

                        //                 } 
                        //         else {

                        //             echo "0 results";
                        //         }
                        //     }
                        mysqli_close($conn);
                    ?>