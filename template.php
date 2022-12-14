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

            max-height: 25%;

            position: fixed;
            left:0px;
            bottom:0px;
        }
        footer iframe{
            padding: 1%;
            margin: auto;
        }
        footer .contacts{
            margin: auto;
            padding: 2%;
        }
        footer h3{
            padding: 1% 0 2% 0;
        }
        footer a {
            color: #5389ff;
            text-decoration: none;
        }

        .news{
            width: 70%;
            margin: 4% auto 4% auto;
        }
        .news h3{
          font-size: 2.2vw;
          text-align: center;
          padding: 5%;
        }
        .news p{
          font-size: 1.6vw;
          text-align: center;
        }
        .preview{
            display: none;
        }
        .socials {
            display: inline;
        }
        .socials img{
            width: 3vw;
            padding: 2px;
        }
    </style>
    <head>
    <meta charset="utf-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">  -->
    </head>
    <body>
        <div class="upper-header">
            <a href="../"><img src="../media/logo1.png" ></a>
            <div class="inside-header">
                <h3 id="upper-header-h3">D??partement d'Informatique</h3>
                <p id="upper-header-p">
                    University Center Of Illizi</p>
            </div>
        </div>

        <div class="menu-bar">
            <ul>
                <li><a href="../">Home</a></li>
                <li id="scolar">
                    <a href="#news">scolarite <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        <ul>
                        <li><a href="../scolarite/emplois-du-temps">emplois</a></li>
                        <li><a href="../scolarite/emploi-des-exams">planning exams</a></li>
                        <li><a href="../scolarite/affichages-des-notes">affichage des notes</a></li>
                        <li><a href="../scolarite/inscription.html">inscription</a></li>
                        </ul>
                    </div>
              </li>
                <li>
                    <a href="">Post Graduation <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="#">presentation</a></li>
                            <li><a href="#">Doctoras habilite</a></li>
                            <li><a href="#">admission</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="">club cientifique</li>
                <li><a href="http://elearning.cuillizi.dz/">online courses</a></li>
                <li>
                    <a href="">staff <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="../staff/teachers.html">teachers</a></li>
                            <li><a href="../staff/administration.html">administration</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!--extra news-->
        <div class="news" id="news">
          <h3>{TITLE}</h3>
          <p class="preview">{PREVIEW}</p>
          <p>{BODY}</p>
        </div>

        <footer id="footer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448.26412054664456!2d8.482289817749207!3d26.52120253170844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1230e01f8e27f707%3A0x3011d91200a9ba0b!2z2KzYp9mF2LnYqSDYpdmE2YrYstmK!5e0!3m2!1sar!2sdz!4v1666372582233!5m2!1sar!2sdz" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="contacts">
                <h3>Contact:</h3>
                <p>ADRESSE : University Center Illizi 33000 - Airport Road - Illizi, Alg??rie.</p>
                <p>T??l : +213 29 41 80 05</p>
                <p>Fax : +213 29 41 80 05</p>
                <p>E-mail : <a href="mailto:mi@cuillizi.dz">mi@cuillizi.dz</a></p>
            
                <div class="socials">
                    <a href="#"><img src="../media/socials/fb.png"></a>
                    <a href="#"><img src="../media/socials/twiter.png"></a>
                    <a href="#"><img src="../media/socials/google+.jpg"></a>
                    <a href="#"><img src="../media/socials/linkdin.png"></a>
                    <a href="#"><img src="../media/socials/yt.png"></a>
                </div>
            </div>
        </footer>
        <script>
            window.onload = function (){
                var height = document.getElementById('footer').offsetHeight;
                document.getElementById('news').style.marginBottom = height + 30 + "px";
            }
        </script>
    </body>

</html>