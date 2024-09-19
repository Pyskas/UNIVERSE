<?php
session_start();
require_once "conectdb.php";
?>
<header class="wrapper">
        <div class="header_top">
            <div class="logo">
                <img src="src/Hamburger menu.png" alt="">
                <p>Sections</p>
          
            </div>
            <div class="palka"></div>
            <div class="search">
                <img src="src/Search.png" alt="">
                <p>Search</p>
            </div>
            <div class="subscribe">
                <img src="src/navvv.png" alt="">
                <p>Subscribe Now <br> <span>3 month for $19</span></p>
            </div>
            <div class="log">
                <img src="src/Man.png" alt="">
           
                <?php
                    if( !empty($_SESSION['id'])){
                    echo "<a class='head_link' href='/account.php'>Профиль</a>";
                    }else{
                        echo "<a href='/form.php'>Sign up</a>";
                    }
                    ?>
            </div>
        </div>
        <div class="palka_flex"><div class="palka_big"></div></div>
        <div class="header_bot">
            <div class="svoboda">
                <img src="src/svoboda.png" alt="">
                <p>Boston and New York Bear Brunt</p>
            </div>
            <div class="universal"><a href="/index.php"><img src="src/Universal.png" alt=""></a></div>
            <div class="date-box"> 
                <?php 
                $months = [ 
                    1 => 'января', 
                    2 => 'февраля', 
                    3 => 'марта', 
                    4 => 'апреля', 
                    5 => 'мая', 
                    6 => 'июня', 
                    7 => 'июля', 
                    8 => 'августа', 
                    9 => 'сентября', 
                    10 => 'октября', 
                    11 => 'ноября', 
                    12 => 'декабря' 
                ]; 
                $date = new DateTime(); 
                $day = $date->format('d'); 
                $month = $months[(int)$date->format('n')]; 
                $year = $date->format('Y'); 
                echo "$day, $month $year"; 
                ?> 
            </div> 
              
            <div class="weather" id="weather"> 
            <script src="/js/weather.js"></script> 
                </div>
                </div>
        </div>
    </header>