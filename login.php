
<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="stylelogin.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>LOGIN PAGE</title>
    </head>
    <body>
        
        <div class="login">
            <h1>Login</h1>
            <form name="f1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST"id="">
                <div class="user-box">
                    <i style='font-size:24px ' class='fas'>&#xf2bd;</i>
                  <input type="text" id="user" placeholder="Username" name="user">
                  
                </div>
                <div class="user-box">
                    <i style="font-size:24px" class="fa">&#xf023;</i>
                  <input type="password" id="pass" placeholder="Password" name="pass" >
                </div>
                
          
               <a  herf="#" class="loginbttn" onclick="validate()" >
               
              
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                   
                  
                  <input type="submit" class="loginbttn" value="Sign in" onclick="validate()"  style="margin-top:0px;margin-left:0px;margin-right:0px;margin-bottom:0px;padding: 10px 20px;">

               </a>
               </div>

            </form>
        </div>
      
        
       
        <script>    
            function validate()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else {if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }  
                  
                     
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    } 
                                       
                }
            
           
            }
            </script> 
            <?php 
        include('connection.php'); 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password); 
        
    

      
        $sql = "select * from loginform where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            header('Location:stu reg.html ') ;
            exit;
            } 
            else{
                echo "<script> alert('Invalid username or password'); </script>"; 
            }
          
       } 
 
?>        

        
       
   
    </body>
</html>

