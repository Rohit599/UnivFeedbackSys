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
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s2">
                                            <i class="small material-icons">account_box</i>
                                        </div>
                                        <div class="input-field col s10">
                                            <input id="user_name" type="text" class="validate">
                                            <label for="user_name">User Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s2">
                                            <i class="small material-icons">lock</i>
                                        </div>
                                        <div class="input-field col s10">
                                            <input id="password" type="password" class="validate">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <a class="waves-effect waves-light btn" style="width: 100%;">LOGIN</a>
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
                            <i class="small material-icons">home</i>               <a href="index.html"><p class="purple-text">Home</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    </body>
</html>