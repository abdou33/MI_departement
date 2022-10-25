<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <style>
        *{
            box-sizing: border-box;
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
            margin-bottom: 5%;
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
            margin: 0;
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
        footer{
            display: flex;
            width: 100%;
            background-color: #333333;
            color: white;
            text-align: left;
            padding: 1vw;


            position: fixed;
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

        .affichage{
            width: 70%;
            margin: 4% auto 4% auto;
        }
        .affichage p{
            padding: 7% 0 7% 0;
        }
        .affichage h2 {
            padding: 2%;
        }
        select{
            width: 50%;
            height: 27px;
            outline: none;
        }
        .affichage input{
            height: 27px;
            width: 50px;
        }

    </style>
    <head>
    <meta charset="utf-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">  -->
    </head>
    <body>
        <div class="upper-header">
            <a href="../index.html"><img src="../../media/logo1.png" ></a>
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
                <li><a href="../index.html">Home</a></li>
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
        <!--extra news-->
        <div class="affichage">
        <form  action="" METHOD="POST">
            <h2>Affichages Des Notes</h2>
            <select name="grade" id="grade">
                <option value="0">-any-</option>

                <option value="0"></option>
                <option value="0">--license--</option>
                <option value="LI1">--First year license--</option>
                <option value="LI2">--Second year license--</option>
                <option value="LI3">--Third year license--</option>

                <option value="0"></option>
                <option value="0">--Master--</option>
                <option value="MI1">--First year Master--</option>
                <option value="MI2">--Second year Master--</option>

            </select>
            <input type="submit" value="Apply">
    </form>

    <?php
        if(isset($_POST['grade'])){
            $select1 = $_POST['grade'];

            if($select1 != 0){
                echo "<p>".$select1."</p>";
                //later add that automatically downloads the right file depends on the value
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARpQv11FoYgWwJakgjwoZVQ2QDEKVlVz8&callback=initMap&v=weekly"defer></script>
        <script>
        </script>
    </body>

</html>