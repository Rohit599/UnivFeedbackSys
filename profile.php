<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title>Student Feedback</title>
    </head>

    <body>
    
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo" style="font-size: 1.5rem;" >Student Feedback</a>
                <style>
                    @media only screen and (min-width: 992px) {
                        .brand-logo{
                            margin-left: 31%;
                        }
                    }
                </style>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="badges.html">About Us</a></li>
                    <li><a href="collapsible.html">Contact Us</a></li>
                    <li><a href="login.html">Log Out</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="badges.html">About Us</a></li>
                    <li><a href="collapsible.html">Contact Us</a></li>
                    <li><a href="login.html">Log Out</a></li>
                </ul>
            </div>
        </nav>

        <div class="parallax-container">
            <div class="parallax"><img src="images/college.jpg"></div>
        </div>
        <div class="section white">
            <div class="row container">
                <div class="row">
                <h2 class="header purple-text">Student Details</h2>
                <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
                    <div class="col s12 m6 l3">
                        <style>
                            .section{
                                padding: 0;
                            }
                        </style>
                        <div class="section">
                            <h5>Name :</h5>
                            <p>Abhishek Singh</p>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="section">
                            <h5>Roll No. :</h5>
                            <p>1609110006</p>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="section">
                            <h5>Branch :</h5>
                            <p>CSE</p>
                        </div>
                    </div>
                    <div class="col s12 m6 l3">
                        <div class="section">
                            <h5>Semester :</h5>
                            <p>4</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="images/feedback-1.jpg"></div>
        </div>

        <div class="carousel carousel-slider center" data-indicators="true" style="max-height: 120px;">
            <div class="carousel-item red white-text" href="#one!">
                <h2>Feedback Panel</h2>
                <p class="white-text">Please provide the feedbacks by scrolling below between each category</p>
            </div>
        </div>  
        
        <form action="#">        
            <div class="carousel carousel-slider center" data-indicators="true" style="height: 670px;">
                <div class="carousel-fixed-item center">
                    <button class="btn waves-effect waves-effect white grey-text darken-text-4" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                <div class="carousel-item red white-text" href="#one!">
                    <h2>Infrastructure</h2>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Bad</th>
                                <th>Average</th>
                                <th>Good</th>
                                <th>Excellent</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group1" type="radio" id="test1"  /><label for="test1"></label></td>
                                <td><input name="group1" type="radio" id="test2"  /><label for="test2"></label></td>
                                <td><input name="group1" type="radio" id="test3"  /><label for="test3"></label></td>
                                <th><input name="group1" type="radio" id="test4"  /><label for="test4"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group2" type="radio" id="test5"  /><label for="test5"></label></td>
                                <td><input name="group2" type="radio" id="test6"  /><label for="test6"></label></td>
                                <td><input name="group2" type="radio" id="test7"  /><label for="test7"></label></td>
                                <th><input name="group2" type="radio" id="test8"  /><label for="test8"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group3" type="radio" id="test9"  /><label for="test9"></label></td>
                                <td><input name="group3" type="radio" id="test10"  /><label for="test10"></label></td>
                                <td><input name="group3" type="radio" id="test11"  /><label for="test11"></label></td>
                                <th><input name="group3" type="radio" id="test12"  /><label for="test12"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group4" type="radio" id="test13"  /><label for="test13"></label></td>
                                <td><input name="group4" type="radio" id="test14"  /><label for="test14"></label></td>
                                <td><input name="group4" type="radio" id="test15"  /><label for="test15"></label></td>
                                <th><input name="group4" type="radio" id="test16"  /><label for="test16"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group5" type="radio" id="test17"  /><label for="test17"></label></td>
                                <td><input name="group5" type="radio" id="test18"  /><label for="test18"></label></td>
                                <td><input name="group5" type="radio" id="test19"  /><label for="test19"></label></td>
                                <th><input name="group5" type="radio" id="test20"  /><label for="test20"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group6" type="radio" id="test21"  /><label for="test21"></label></td>
                                <td><input name="group6" type="radio" id="test22"  /><label for="test22"></label></td>
                                <td><input name="group6" type="radio" id="test23"  /><label for="test23"></label></td>
                                <th><input name="group6" type="radio" id="test24"  /><label for="test24"></label></th>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                </div>
                <div class="carousel-item amber white-text" href="#two!">
                    <h2>Management</h2>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Bad</th>
                                <th>Average</th>
                                <th>Good</th>
                                <th>Excellent</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group7" type="radio" id="test25"  /><label for="test25"></label></td>
                                <td><input name="group7" type="radio" id="test26"  /><label for="test26"></label></td>
                                <td><input name="group7" type="radio" id="test27"  /><label for="test27"></label></td>
                                <th><input name="group7" type="radio" id="test28"  /><label for="test28"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group8" type="radio" id="test29"  /><label for="test29"></label></td>
                                <td><input name="group8" type="radio" id="test30"  /><label for="test30"></label></td>
                                <td><input name="group8" type="radio" id="test31"  /><label for="test31"></label></td>
                                <th><input name="group8" type="radio" id="test32"  /><label for="test32"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group9" type="radio" id="test33"  /><label for="test33"></label></td>
                                <td><input name="group9" type="radio" id="test34"  /><label for="test34"></label></td>
                                <td><input name="group9" type="radio" id="test35"  /><label for="test35"></label></td>
                                <th><input name="group9" type="radio" id="test36"  /><label for="test36"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group10" type="radio" id="test37"  /><label for="test37"></label></td>
                                <td><input name="group10" type="radio" id="test38"  /><label for="test38"></label></td>
                                <td><input name="group10" type="radio" id="test39"  /><label for="test39"></label></td>
                                <th><input name="group10" type="radio" id="test40"  /><label for="test40"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group11" type="radio" id="test41"  /><label for="test41"></label></td>
                                <td><input name="group11" type="radio" id="test42"  /><label for="test42"></label></td>
                                <td><input name="group11" type="radio" id="test43"  /><label for="test43"></label></td>
                                <th><input name="group11" type="radio" id="test44"  /><label for="test44"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group12" type="radio" id="test45"  /><label for="test45"></label></td>
                                <td><input name="group12" type="radio" id="test46"  /><label for="test46"></label></td>
                                <td><input name="group12" type="radio" id="test47"  /><label for="test47"></label></td>
                                <th><input name="group12" type="radio" id="test48"  /><label for="test48"></label></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="carousel-item green white-text" href="#three!">
                    <h2>Lab</h2>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Bad</th>
                                <th>Average</th>
                                <th>Good</th>
                                <th>Excellent</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group13" type="radio" id="test49"  /><label for="test49"></label></td>
                                <td><input name="group13" type="radio" id="test50"  /><label for="test50"></label></td>
                                <td><input name="group13" type="radio" id="test51"  /><label for="test51"></label></td>
                                <th><input name="group13" type="radio" id="test52"  /><label for="test52"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group14" type="radio" id="test53"  /><label for="test53"></label></td>
                                <td><input name="group14" type="radio" id="test54"  /><label for="test54"></label></td>
                                <td><input name="group14" type="radio" id="test55"  /><label for="test55"></label></td>
                                <th><input name="group14" type="radio" id="test56"  /><label for="test56"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group15" type="radio" id="test57"  /><label for="test57"></label></td>
                                <td><input name="group15" type="radio" id="test58"  /><label for="test58"></label></td>
                                <td><input name="group15" type="radio" id="test59"  /><label for="test59"></label></td>
                                <th><input name="group15" type="radio" id="test60"  /><label for="test60"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group16" type="radio" id="test61"  /><label for="test61"></label></td>
                                <td><input name="group16" type="radio" id="test62"  /><label for="test62"></label></td>
                                <td><input name="group16" type="radio" id="test63"  /><label for="test63"></label></td>
                                <th><input name="group16" type="radio" id="test64"  /><label for="test64"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group17" type="radio" id="test65"  /><label for="test65"></label></td>
                                <td><input name="group17" type="radio" id="test66"  /><label for="test66"></label></td>
                                <td><input name="group17" type="radio" id="test67"  /><label for="test67"></label></td>
                                <th><input name="group17" type="radio" id="test68"  /><label for="test68"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group18" type="radio" id="test69"  /><label for="test69"></label></td>
                                <td><input name="group18" type="radio" id="test70"  /><label for="test70"></label></td>
                                <td><input name="group18" type="radio" id="test71"  /><label for="test71"></label></td>
                                <th><input name="group18" type="radio" id="test72"  /><label for="test72"></label></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="carousel-item blue white-text" href="#four!">
                    <h2>Canteen</h2>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Bad</th>
                                <th>Average</th>
                                <th>Good</th>
                                <th>Excellent</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group19" type="radio" id="test73"  /><label for="test73"></label></td>
                                <td><input name="group19" type="radio" id="test74"  /><label for="test74"></label></td>
                                <td><input name="group19" type="radio" id="test75"  /><label for="test75"></label></td>
                                <th><input name="group19" type="radio" id="test76"  /><label for="test76"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group20" type="radio" id="test77"  /><label for="tes77"></label></td>
                                <td><input name="group20" type="radio" id="test78"  /><label for="test78"></label></td>
                                <td><input name="group20" type="radio" id="test79"  /><label for="test79"></label></td>
                                <th><input name="group20" type="radio" id="test80"  /><label for="test80"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group21" type="radio" id="test81"  /><label for="test81"></label></td>
                                <td><input name="group21" type="radio" id="test82"  /><label for="test82"></label></td>
                                <td><input name="group21" type="radio" id="test83"  /><label for="test83"></label></td>
                                <th><input name="group21" type="radio" id="test84"  /><label for="test84"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group22" type="radio" id="test85"  /><label for="test85"></label></td>
                                <td><input name="group22" type="radio" id="test86"  /><label for="test86"></label></td>
                                <td><input name="group22" type="radio" id="test87"  /><label for="test87"></label></td>
                                <th><input name="group22" type="radio" id="test88"  /><label for="test88"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group23" type="radio" id="test89"  /><label for="test89"></label></td>
                                <td><input name="group23" type="radio" id="test90"  /><label for="test90"></label></td>
                                <td><input name="group23" type="radio" id="test91"  /><label for="test91"></label></td>
                                <th><input name="group23" type="radio" id="test92"  /><label for="test92"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group24" type="radio" id="test93"  /><label for="test93"></label></td>
                                <td><input name="group24" type="radio" id="test94"  /><label for="test94"></label></td>
                                <td><input name="group24" type="radio" id="test95"  /><label for="test95"></label></td>
                                <th><input name="group24" type="radio" id="test96"  /><label for="test96"></label></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="carousel-item pink white-text" href="#five!">
                    <h2>Faculty</h2>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Bad</th>
                                <th>Average</th>
                                <th>Good</th>
                                <th>Excellent</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group25" type="radio" id="test97"  /><label for="test97"></label></td>
                                <td><input name="group25" type="radio" id="test98"  /><label for="test98"></label></td>
                                <td><input name="group25" type="radio" id="test99"  /><label for="test99"></label></td>
                                <th><input name="group25" type="radio" id="test100"  /><label for="test100"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group26" type="radio" id="test101"  /><label for="test101"></label></td>
                                <td><input name="group26" type="radio" id="test102"  /><label for="test102"></label></td>
                                <td><input name="group26" type="radio" id="test103"  /><label for="test103"></label></td>
                                <th><input name="group26" type="radio" id="test104"  /><label for="test104"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group27" type="radio" id="test105"  /><label for="test105"></label></td>
                                <td><input name="group27" type="radio" id="test106"  /><label for="test106"></label></td>
                                <td><input name="group27" type="radio" id="test107"  /><label for="test107"></label></td>
                                <th><input name="group27" type="radio" id="test108"  /><label for="test108"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group28" type="radio" id="test109"  /><label for="test109"></label></td>
                                <td><input name="group28" type="radio" id="test110"  /><label for="test110"></label></td>
                                <td><input name="group28" type="radio" id="test111"  /><label for="test111"></label></td>
                                <th><input name="group28" type="radio" id="test112"  /><label for="test112"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group29" type="radio" id="test113"  /><label for="test113"></label></td>
                                <td><input name="group29" type="radio" id="test114"  /><label for="test114"></label></td>
                                <td><input name="group29" type="radio" id="test115"  /><label for="test115"></label></td>
                                <th><input name="group29" type="radio" id="test116"  /><label for="test116"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group30" type="radio" id="test117"  /><label for="test117"></label></td>
                                <td><input name="group30" type="radio" id="test118"  /><label for="test118"></label></td>
                                <td><input name="group30" type="radio" id="test119"  /><label for="test119"></label></td>
                                <th><input name="group30" type="radio" id="test120"  /><label for="test120"></label></th>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                </div>
                
                <div class="carousel-item orange white-text" href="#six!">
                    <h2>Technology</h2>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Bad</th>
                                <th>Average</th>
                                <th>Good</th>
                                <th>Excellent</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group31" type="radio" id="test121"  /><label for="test121"></label></td>
                                <td><input name="group31" type="radio" id="test122"  /><label for="test122"></label></td>
                                <td><input name="group31" type="radio" id="test123"  /><label for="test123"></label></td>
                                <th><input name="group31" type="radio" id="test124"  /><label for="test124"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group32" type="radio" id="test125"  /><label for="test125"></label></td>
                                <td><input name="group32" type="radio" id="test126"  /><label for="test126"></label></td>
                                <td><input name="group32" type="radio" id="test127"  /><label for="test127"></label></td>
                                <th><input name="group32" type="radio" id="test128"  /><label for="test128"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group33" type="radio" id="test129"  /><label for="test129"></label></td>
                                <td><input name="group33" type="radio" id="test130"  /><label for="test130"></label></td>
                                <td><input name="group33" type="radio" id="test131"  /><label for="test131"></label></td>
                                <th><input name="group33" type="radio" id="test132"  /><label for="test132"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group34" type="radio" id="test133"  /><label for="test133"></label></td>
                                <td><input name="group34" type="radio" id="test134"  /><label for="test134"></label></td>
                                <td><input name="group34" type="radio" id="test135"  /><label for="test135"></label></td>
                                <th><input name="group34" type="radio" id="test136"  /><label for="test136"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group35" type="radio" id="test137"  /><label for="test137"></label></td>
                                <td><input name="group35" type="radio" id="test138"  /><label for="test138"></label></td>
                                <td><input name="group35" type="radio" id="test139"  /><label for="test139"></label></td>
                                <th><input name="group35" type="radio" id="test140"  /><label for="test140"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group36" type="radio" id="test141"  /><label for="test141"></label></td>
                                <td><input name="group36" type="radio" id="test142"  /><label for="test142"></label></td>
                                <td><input name="group36" type="radio" id="test143"  /><label for="test143"></label></td>
                                <th><input name="group36" type="radio" id="test144"  /><label for="test144"></label></th>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                </div>
                <div class="carousel-item purple white-text" href="#seven!">
                    <h2>Others</h2>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Bad</th>
                                <th>Average</th>
                                <th>Good</th>
                                <th>Excellent</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group37" type="radio" id="test145"  /><label for="test145"></label></td>
                                <td><input name="group37" type="radio" id="test146"  /><label for="test146"></label></td>
                                <td><input name="group37" type="radio" id="test147"  /><label for="test147"></label></td>
                                <th><input name="group37" type="radio" id="test148"  /><label for="test148"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group38" type="radio" id="test149"  /><label for="test149"></label></td>
                                <td><input name="group38" type="radio" id="test150"  /><label for="test150"></label></td>
                                <td><input name="group38" type="radio" id="test151"  /><label for="test151"></label></td>
                                <th><input name="group38" type="radio" id="test152"  /><label for="test152"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group39" type="radio" id="test153"  /><label for="test153"></label></td>
                                <td><input name="group39" type="radio" id="test154"  /><label for="test154"></label></td>
                                <td><input name="group39" type="radio" id="test155"  /><label for="test155"></label></td>
                                <th><input name="group39" type="radio" id="test156"  /><label for="test156"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group40" type="radio" id="test157"  /><label for="test157"></label></td>
                                <td><input name="group40" type="radio" id="test158"  /><label for="test158"></label></td>
                                <td><input name="group40" type="radio" id="test159"  /><label for="test159"></label></td>
                                <th><input name="group40" type="radio" id="test160"  /><label for="test160"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group41" type="radio" id="test161"  /><label for="test161"></label></td>
                                <td><input name="group41" type="radio" id="test162"  /><label for="test162"></label></td>
                                <td><input name="group41" type="radio" id="test163"  /><label for="test163"></label></td>
                                <th><input name="group41" type="radio" id="test164"  /><label for="test164"></label></th>
                            </tr>
                            <tr>
                                <td>Did you like the college?</td>
                                <td><input name="group42" type="radio" id="test165"  /><label for="test165"></label></td>
                                <td><input name="group42" type="radio" id="test166"  /><label for="test166"></label></td>
                                <td><input name="group42" type="radio" id="test167"  /><label for="test167"></label></td>
                                <th><input name="group42" type="radio" id="test168"  /><label for="test168"></label></th>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                </div>
            </div>
        </form>
       
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

        <script>
            $(document).ready(function(){
                $(".button-collapse").sideNav();
                $('.parallax').parallax();
                $('.carousel.carousel-slider').carousel({fullWidth: true});
            });
        </script>
   
    </body>
</html>