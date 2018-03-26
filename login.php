<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <title>Login</title>
    </head>

    <body class="valign-wrapper red lighten-2" style="height: 100vh;">
        <div class="container z-depth-4"  style="max-width: 350px;">
            <div class="center-align">
                <div class="col s6">
                    <div class="card" style="margin: 0px;">
                        <div class="card-image">
                            <img src="images/Capture4.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title blue-text text-darken-2">Student Login Panel</span>
                            <p>Please provide following details</p>
                            <div class="row">
                                <form class="col s12" method="post" action="#">
                                    <div class="row">
                                        <div class="input-field col s2">
                                            <i class="small material-icons">account_box</i>
                                        </div>
                                        <div class="input-field col s10">
                                            <input type="text" class="validate" name="user" placeholder="USERNAME">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s2">
                                            <i class="small material-icons">lock</i>
                                        </div>
                                        <div class="input-field col s10">
                                            <input type="password" class="validate" name="pass" placeholder="PASSWORD">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <input type="submit" class="waves-effect waves-light btn" name="login" value="LOGIN" style="width: 100%;"></input>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s6">
                                            <a class="blue-text text-darken-2" href="#"><p class="left-align">Register Here!</p></a>
                                        </div>
                                        <div class="col s6">
                                            <a class="blue-text text-darken-2" href="#"><p class="right-align">Forgot Password?</p></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php
                                if (isset($_POST['login']))
                                    {
                                    $username = mysqli_real_escape_string($con, $_POST['user']);
                                    $password = mysqli_real_escape_string($con, $_POST['pass']);
            
                                    $query      = mysqli_query($con, "SELECT * FROM student WHERE  pass='$password' and username='$username'");
                                    $row        = mysqli_fetch_array($query);
                                    $num_row    = mysqli_num_rows($query);
            
                                    if ($num_row > 0) 
                                        {           
                                        $_SESSION['user_id']=$row['username'];
                                        header('location:feedback.php');
                    
                                        }
                                    else
                                        {
                                        echo 'Invalid Username and Password Combination';
                                        }
                                    }
                                ?>
                            <i class="small material-icons">home</i>               <a href="index.html"><p class="purple-text">Home</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>