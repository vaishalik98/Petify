<?php
    include 'dbconn.php';
   
    if(isset($_POST['signup'])){
        $username=mysqli_real_escape_string($con, $_POST['username']);
        $email=mysqli_real_escape_string($con, $_POST['emailid']);
        $mobileno=mysqli_real_escape_string($con, $_POST['mobile']);
        $password=mysqli_real_escape_string($con, $_POST['password']);
        $password2=mysqli_real_escape_string($con, $_POST['password2']);

        $gmailquery="select * from login where emailid= '$email'";

        $query=mysqli_query($con,$gmailquery);
    
        $emailcount=mysqli_num_rows($query);



    
    if($emailcount>= 1)
    {
        ?>
                
        <script>
            alert("EMAIL EXITED");
        </script>
        <?php

    }
    else{
         if($password ===$password2){

                $insertquery= "insert into login(usernamee,emailid,mobileno,password,password2) values('$username','$email','$mobileno','$password','$password2')";
                $iquery=mysqli_query($con,$insertquery);
                if($iquery){
                    ?>
                        <script>
                            alert("signed up");
                        </script>
                        <?php
                        header("Location: Login.html?login=success");
                        exit();                 
                
                       
                        
                }
                else{
                        ?>
                        <script>
                            alert("no succestion");
                        </script>
                        <?php
                }
                
                
                    
        }
        else{

            ?>
            <script>
                alert("password doesn't match each other");
            </script>
            <?php    
       }
    
    } 
    




        if($emailcount>0)
        {
            ?>
                    
            <script>
                alert("EMAIL EXIsTED");
            </script>
            <?php
    
        }
        else{
             if($password ===$password2){

                    $insertquery= "insert into login(username,emailid,mobileno,password,password2) values('$username','$email','$mobileno','$password','$password2')";
                    $iquery=mysqli_query($con,$insertquery);
                    if($iquery){
                        ?>
                        <script>
                            alert("signed up");
                            </script>
                        <?php
                        
                            header("Location: Login.html?login=success");
                            exit();                 
                    
                           
                            
                    }
                    else{
                            ?>
                            <script>
                                alert("no succestion");
                            </script>
                            <?php
                    }
                    
                    
                        
            }
            else{

                ?>
                <script>
                    alert("password doesn't match each other");
                </script>
                <?php     
           }
             
          
        }
    }


 ?>