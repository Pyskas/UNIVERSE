<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universal</title>
    <link rel="stylesheet" href="css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    
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
                <img src="src/Image.png" alt="">
                <p>Subscribe Now <br> <span>3 month for $19</span></p>
            </div>
            <div class="log">
                <img src="src/Man.png" alt="">
                <p>Sign-in</p>
            </div>
        </div>
        <div class="palka_flex"><div class="palka_big"></div></div>
        <div class="header_bot">
            <div class="svoboda">
                <img src="src/svoboda.png" alt="">
                <p>Boston and New York Bear Brunt</p>
            </div>
            <div class="universal"><img src="src/Universal.png" alt=""></div>
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
            <div class="weather">
                <img src="src/Sun.png" alt="">
                <p>- 23 °C</p>
            </div>
        </div>
    </header>

    <div class="category">
        <div class="wrapper">
            <div class="words">
                <a href="#">NEWS</a>
                <a href="#">OPINION</a>
                <a href="#">SCIECE</a>
                <a href="#">LIFE</a>
                <a href="#">TRAVEL</a>
                <a href="#">MONEYS</a>
                <a href="#">ART & DESIGN</a>
                <a href="#">SPORTS</a>
                <a href="#">PEOPLE</a>
                <a href="#">HEALTH</a>
                <a href="#">EDUCATION</a>
            </div>
        </div>
    </div>
        
    <div class="posts">
        <div class="wrapper">
            
        </div>
    </div>

</body>
</html>