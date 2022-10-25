<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box
        }
        .upper-header{
            display: flex;
            margin: 0 auto 0 20%;
        }
        .upper-header img{
            width: 11vw;
            float: left;
        }
        .inside-header{
            margin: auto 1% auto 8%;
            text-align: center;
        }
        .inside-header h3 p{
            padding: 10vw;
        }
        #upper-header-h3{
            font-size: 2.5vw;
        }
        #upper-header-p{
            font-size: 2vw;
        }
        #icon{
            width: 1000px;
            display: none;
        }
        #icon1{
            color: black;
            padding: 14px 16px;
            margin: 10%;
            text-decoration: none;
            font-size: 30px;
        }
        .menu-bar ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: auto;
        }
        @media only screen and (max-width: 500px) {
            /*change this to 1000 later*/
            .menu-bar ul {
            list-style-type: none;
            overflow: hidden;
            display:none;
            justify-content: center;
            }
            #icon{
            width: 1000px;
            display: block;
        }
        }
        li {
            padding: 5px 10px;
            color:white;
        }
        .menu-bar {
            background-color: #333333;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .menu-bar ul li {
            /* width: 120px; */
            /* text-align: center; */
            margin: 1vw;
            position: relative;
        }

        .menu-bar ul li a {
            font-size: 1.9vw;
            color: white;
            text-align: center;
            font-size: 1.68vw;
            padding: auto;
            text-decoration: none;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .menu-bar ul li a:hover{
            /*font-size: 1.91vw;*/
        }

        .menu-bar ul li:hover{
            background-color: rgb(95, 95, 95);
            transition: all 0.5s;
        }

        /* dropdown menu style */
        .dropdown-menu {
            display: none;
        }

        .menu-bar ul li:hover .dropdown-menu {
            display: block;
            position: absolute;
            left: 0;
            top: 100%;
            background-color: #333333;
            transition: all 0.3s;
            z-index: 1;
        }

        .menu-bar ul li:hover .dropdown-menu ul {
            display: block;
            margin: 5px;
            text-align: center;
            transition: all 0.3s;
        }

        .menu-bar ul li:hover .dropdown-menu ul li {
            width: auto;
            padding: 10px;
            transition: all 0.3s;
        }

        /*slideshow styles*/

        .slideshow {
            width: 85vw;
            height: 30vw;
            margin: 20px auto 20px auto;
            overflow: hidden;
            border: solid 1px black;
            border-radius: 3px;
        }

        .item {
            display: flex;
            width: 100%;
        }

        .slideshow-container {
            width: 100%;
            transition: 1s ease;
            display: flex;
        }

        .slideshow-container:hover {
            animation-play-state: paused;
        }

        .slide {
            animation: slide 20s ease infinite;
        }

        @keyframes slide {
            0% {
                transform: translateX(0%);
            }
            30% {
                transform: translateX(0);
            }
            35% {
                transform: translateX(-100%);
            }
            65% {
                transform: translateX(-100%);
            }
            70% { 
                transform: translateX(-200%);
            }
            95% { 
                transform: translateX(-200%);
            }
            100% {
                transform: translateX(0);
            }
        }

        .item img {
            width: 61vw;
        }

        .item .caption {
            width: 85vw;
            color: rgb(255, 255, 255);
            text-align: center;
            position: absolute;
            bottom: 10vw;
            font-size: 3vw;
            background-color: rgb(51, 51, 51, 0.4);
            padding: 1vw;
            margin: auto;
        }
        .item .space{
            width: 15vw;
            height: 100%;
        }
        footer{
            display: flex;
            width: 100%;
            background-color: #333333;
            color: white;
            text-align: left;
            padding: 1vw;

            position: relative;
            left:0px;
            bottom:0px;
        }
        footer iframe{
            padding: 3%;
            margin: auto;
        }
        footer .contacts{
            margin: auto;
        }
        footer h3{
            font-size: 1.7vw;
            padding: 1% 0 2% 0;
        }
        footer p{
            font-size: 1.2vw;
        }
        footer a {
            color: #5389ff;
            text-decoration: none;
        }
        .news{
            width: 70%;
            margin: 4% auto 4% auto;
            text-align: left;
        }
        .part{
            padding: 1%;
        }
        .readmore{
            padding: 1%;
        }
    </style>
    <link rel="icon" href="media/logo-darkinwhite.png">
    <title>MI_dep</title>
    <head>
        <meta charset="utf-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">  -->
    </head>
    <body>
        <div class="upper-header">
            <a href="index.html"><img src="media/logo1.png" ></a>
            <div class="inside-header">
                <h3 id="upper-header-h3">Département d'Informatique</h3>
                <p id="upper-header-p">
                    University Center Of Illizi</p>
            </div>
        </div>
        <!--<a id="icon1">
            <i class="fa fa-bars" id="icon"></i>
        </a>-->

        <div class="menu-bar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li id="scolar">
                    <a href="#news">scolarite <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="#">emplois</a></li>
                            <li><a href="#">planning exams</a></li>
                            <li><a href="#">affichage des notes</a></li>
                            <li><a href="#">inscription</a></li>
                        </ul>
                    </div>
              </li>
                <li>
                    <a href="#contact">Post Graduation <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="#">presentation</a></li>
                            <li><a href="#">Doctoras habilite</a></li>
                            <li><a href="#">admission</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#about">club cientifique</li>
                <li><a href="http://elearning.cuillizi.dz/">online courses</a></li>
                <li>
                    <a href="#about">staff <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/staff/teachers.html">teachers</a></li>
                            <li><a href="/staff/administration.html">administration</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <!--slider-->
        <!--hovering over the images will pause the slideshow -->

        <section class="slideshow">
            <div class="slideshow-container slide">
                <div class="item">
                    <div class="space"></div>
                    <img src="media/slider/uni2.jpg" />
                    <div class="caption">Computer Science Department</div>
                    <div class="space"></div>
                </div>
                <div class="item">
                    <div class="space"></div>
                    <img src="media/slider/ai.jpeg" />
                    <div class="caption">AI Rules the World</div>
                    <div class="space"></div>
                </div>
            
                <div class="item">
                    <div class="space"></div>
                    <img src="media/slider/uni.jpeg" />
                    <div class="caption">computer sciencce students</div>
                    <div class="space"></div>
                </div>
            </div>
        </section>
        <div class="news">
        <?php
        
        $files = array();
        $dir = "news/";

        if ($handle = opendir($dir)) {
            while (false !== ($file = readdir($handle))) {
                if ($file == "." || $file == "..") {
                    
                }
                else{
                    if (filesize($dir.$file) != 0){
                        $files[filemtime($dir.$file)] = $file;
                    }
                }
            }
            closedir($handle);

            if (count($files) == 0){
                echo "<p>no news</p>";
            }
            else {
                echo "<hr>";
            }


            // sort
            krsort($files);

            //$lines = file($myFile);//file in to an array
            //echo $lines[1]; //line 2

            foreach ($files as $val) {
                
                echo '<div class="part">';
                echo "<a href".$dir.$val."><h3>".str_replace(".html", "",$val)."</h3></a>";
                echo "<p>".date('F d Y, H:i',filemtime($dir.$val))."</p>";
                $lines = file($dir.$val);
                echo $lines[228];
                echo '<a class="readmore" href='.$dir.rawurlencode($val).'><br><br>Read more <i class="fas fa-caret-right"></i></a>';
                //substr($lines[217], 10, 30)
                echo "</div>";
                echo "<hr>";
            }
        } 
        ?>
        </div>
        <footer>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448.26412054664456!2d8.482289817749207!3d26.52120253170844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1230e01f8e27f707%3A0x3011d91200a9ba0b!2z2KzYp9mF2LnYqSDYpdmE2YrYstmK!5e0!3m2!1sar!2sdz!4v1666372582233!5m2!1sar!2sdz" 
            width="300px" 
            height="200px" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="contacts">
                <h3>Contact:</h3>
                <p>ADRESSE : University Center Illizi 33000 - Airport Road - Illizi, Algérie.</p>
                <p>Tél : +213 29 41 80 05</p>
                <p>Fax : +213 29 41 80 05</p>
                <p>E-mail : <a href="mailto:mi@cuillizi.dz">mi@cuillizi.dz</a></p>
            </div>
        </footer>
        <script>
        </script>
    </body>

</html>