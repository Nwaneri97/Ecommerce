<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $telephone =$password = $confirm_password = "";
$username_err = $email_err = $telephone_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE username = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }


        // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE email = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This E-mail is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    

            // Validate username
    if(empty(trim($_POST["telephone"]))){
        $email_err = "Please enter a phone number.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE telephone = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_telephone);
            
            // Set parameters
            $param_telephone = trim($_POST["telephone"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $telephone_err = "This number is already in use.";
                } else{
                    $telephone = trim($_POST["telephone"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }


    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO user (username, email, telephone, password) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_email, $param_telephone, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_telephone = $telephone;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($connection);
}
?>


<?php
include 'header.php';
?>


<div class="row justify-content-center">
<div class="form-body">
    <h1 class="text-center">Register</h1>
    <div class="login-form">        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            
            
            <div class="txtb <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">      
                <label form="username">Username</label>
                <input type="username" name="username" required value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>

            <div class="txtb <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">      
                <label form="email">Email</label>
                <input type="email" name="email" required value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>

            <div class="txtb <?php echo (!empty($telephone_err)) ? 'has-error' : ''; ?>">      
                <label form="telephone">Telephone</label>
                <input type="telephone" name="telephone" required value="<?php echo $telephone; ?>">
                <span class="help-block"><?php echo $telephone_err; ?></span>
            </div>

            <div class="txtb <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">      
                <label form="password">Password</label>
                <input type="password" name="password" required value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="txtb <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">      
                <label form="password">Confirm Password</label>
                <input type="password" name="confirm_password" required value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <input type="submit" class="neon-submit" name="reg_user" value="Submit"> Submit</input>
            <input type="reset" class="neon-submit" value="Reset">

       <!--      <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
 -->

        
            <div class="bottom-text row text-center justify-content-center">
                <p>Already a User? 
                    <a href="login.php">Login Here</a> 
                </p>
            </div>
        </form>
    </div>
</div>
</div>







<?php
include 'footer.php';
?>