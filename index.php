<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title>University Feedback</title>
    </head>

    <body>
        <nav>
            <div class="nav-wrapper">
                <img class="circle" src="images/Capture2.jpg" id="mhrd" style="max-width: 85px;">
                <style>
                    @media only screen and (max-width: 992px) {
                        #mhrd{
                            display: none;
                        }
                    }
                </style>
                <a href="#!" class="brand-logo">University Feedback</a>
                <style>
                    @media only screen and (min-width: 992px) {
                        .brand-logo{
                            margin-left: 25%;
                        }
                    }
                </style>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="login.html">Admin</a></li>
                    <li><a href="login.html">Faculty</a></li>
                    <li><a href="login.html">Student</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="login.html">Admin</a></li>
                    <li><a href="login.html">Faculty</a></li>
                    <li><a href="login.html">Student</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="row">
            <div class="col s12 m3">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Feedback India</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="images/Capture3.png">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m3">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">News & Updates</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
            
        </div>
        
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Subscribe Us</h5>
                        <p class="grey-text text-lighten-4">Subscribe to us to stay updated.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Contact Us</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright Content
                    <a class="grey-text text-lighten-4 right" href="https://innovate.mygov.in/sih2018/
">SIH 2018</a>
                </div>
            </div>
        </footer>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

        <script>
            $(document).ready(function(){
                $(".button-collapse").sideNav();
            });
        </script>
    </body>
</html>