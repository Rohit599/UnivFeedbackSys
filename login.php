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
                                            <!-- Modal Trigger -->
                                            <a class="blue-text text-darken-2 modal-trigger" href="#modal1"><p class="left-align">Register Here!</p></a>
                                            
                                                <!-- Modal Structure -->
                                                <div id="modal1" class="modal">
                                                    <div class="modal-content">
                                                        <h4>Registration Portal</h4>
                                                        <p>Register to submit your feedback.</p> 
                                                    <div class="row">
                                                        <form class="col s12">
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="first_name" type="text" class="validate">
                                                                    <label for="first_name">First Name</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="last_name" type="text" class="validate">
                                                                    <label for="last_name">Last Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="branch" type="text" class="validate">
                                                                    <label for="branch">Branch</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="semester" type="text" class="validate">
                                                                    <label for="semester">Semester</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <input id="email" type="email" class="validate">
                                                                    <label for="email">Email</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <input id="password" type="password" class="validate">
                                                                    <label for="password">Password</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="phone" type="text" class="validate">
                                                                    <label for="branch">Phone</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="aadhaar" type="text" class="validate">
                                                                    <label for="semester">Aadhaar</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s4">
                                                                <select>
                                                                <option value="" disabled selected>Choose date</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="3">4</option>
                                                                <option value="3">5</option>
                                                                <option value="3">6</option>
                                                                <option value="3">7</option>
                                                                <option value="3">8</option>
                                                                <option value="3">9</option>
                                                                <option value="3">10</option>
                                                                <option value="3">11</option>
                                                                <option value="3">12</option>
                                                                <option value="3">13</option>
                                                                <option value="3">14</option>
                                                                <option value="3">15</option>
                                                                <option value="3">16</option>
                                                                <option value="3">17</option>
                                                                <option value="3">18</option>
                                                                <option value="3">19</option>
                                                                <option value="3">20</option>
                                                                <option value="3">21</option>
                                                                <option value="3">22</option>
                                                                <option value="3">23</option>
                                                                <option value="3">24</option>
                                                                <option value="3">25</option>
                                                                <option value="3">26</option>
                                                                <option value="3">27</option>
                                                                <option value="3">28</option>
                                                                <option value="3">29</option>
                                                                <option value="3">30</option>
                                                                <option value="3">31</option>
                                                                </select>
                                                                <label>Date Of Birth</label>
                                                                </div>
                                                                <div class="input-field col s4">
                                                                <select>
                                                                <option value="" disabled selected>Choose month</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="3">4</option>
                                                                <option value="3">5</option>
                                                                <option value="3">6</option>
                                                                <option value="3">7</option>
                                                                <option value="3">8</option>
                                                                <option value="3">9</option>
                                                                <option value="3">10</option>
                                                                <option value="3">11</option>
                                                                <option value="3">12</option>
                                                                </select>
                                                                <label>Date Of Birth</label>
                                                                </div>
                                                                <div class="input-field col s4">
                                                                <select>
                                                                <option value="" disabled selected>Choose year</option>
                                                                <option value="1">1985</option>
                                                                <option value="2">1986</option>
                                                                <option value="3">1987</option>
                                                                <option value="3">1988</option>
                                                                <option value="3">1989</option>
                                                                <option value="3">1990</option>
                                                                <option value="3">1991</option>
                                                                <option value="3">1992</option>
                                                                <option value="3">1993</option>
                                                                <option value="3">1994</option>
                                                                <option value="3">1995</option>
                                                                <option value="3">1996</option>
                                                                <option value="3">1997</option>
                                                                <option value="3">1998</option>
                                                                <option value="3">1999</option>
                                                                <option value="3">2000</option>
                                                                <option value="3">2001</option>
                                                                <option value="3">2002</option>
                                                                <option value="3">2003</option>
                                                                <option value="3">2004</option>
                                                                <option value="3">2005</option>
                                                                </select>
                                                                <label>Date Of Birth</label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="modal-action modal-close btn waves-effect waves-light" type="submit" name="action">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </div>  
                                            
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
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        
        <script>
            $(document).ready(function(){
                $('.modal').modal();
                $('select').material_select();
            });
        </script>
        
    </body>
</html>