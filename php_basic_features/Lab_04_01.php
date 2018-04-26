<?php 
$_REQUESTee['username'];
    if(isset($_REQUEST['username'])&&isset($_REQUEST['password'])){
      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];
      
        if(filter_has_var(FILTER_SANITIZE_STRING, $username)){
            echo "Welcome ". $_REQUEST['username']. "<br />";
        }else{
            echo "Your Username is invalid!";
        }
      
      echo "You Password is: ". $_REQUEST['password']. " !";
      exit();
    }
?>
<html>
    <body>  
        <h2>This is Get method!</h2>
        <form action = "<?php $_PHP_SELF ?>" method = "GET">
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username"/>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password"/>
            <input type="submit" />
        </form>
        <h2>This is Post method!</h2>
        <form action = "<?php $_PHP_SELF ?>" method = "POST">
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username"/>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password"/>
            <input type="submit" />
        </form>
    </body>    
</html>    