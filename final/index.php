
<?php 
$pageTitle = 'Homepage'; // new code 
require 'config.php'; // new code 

?>
<!-- animate-view on all blocks/images/maps and in every file and iframes have the same class -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Homepage</title>
<link rel="stylesheet" href="assets/CSS/styles.css">
</head>
<body>


        <div class="hamburger-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        
        <div class="overlay" id="overlay">
            <div class="overlay-content">
            
                <a href="comments.php">Comments</a>
                <a href="index.php">Homepage</a>
                <a href="Shopping.php">Shopping</a>
                <a href="HistoricalLandmarks.php">Historical Landmarks</a>
                <a href="LondonForFoodies.php">London For Foodies</a>
                <a href="TallestBuildings.php">Tallest Buildings</a>
                <a href="VintageLondon.php">Vintage London</a>
                <a href="Transport.php">Transport</a>
                <a href="Football.php">Football</a>
                <a href="Parks.php">Parks</a>
                <a href="GradeCategory.php">Grade Category</a>
                <a href="References.php">References</a>
                <a href="NightLife.php">Night Life</a> <!-- new code -->

            </div>
        
        </div>
    
    
    
        </div>
    
        <div id="google_translate_element"></div>
<div class="welcome-section">
   
    <nav class="navbar">
        <ul class="nav-links">
            <li><a href="index.php">Homepage</a></li>
            <li><a href="HistoricalLandmarks.php">Historical Landmarks</a></li>
            <li><a href="Parks.php">Parks</a></li>
            <li><a href="Football.php">Football</a></li>
            <li class="dropdown">
                <a href="#">More</a>
                <div class="dropdown-content">
                    <div class="dropdown-column">
                        <a href="TallestBuildings.php">Tallest Buildings</a>
                        
                        <a href="LondonForFoodies.php">London For Foodies</a>
                        <a href="VintageLondon.php">Vintage London</a>
                       
                        <a href="GradeCategory.php">Grade Category</a>
                        
                        
                    </div>
                    <div class="dropdown-column">
                        <a href="Shopping.php">Shopping</a>
                        <a href="Transport.php">Transport</a>
                        <a href="Nightlife.php">Nightlife</a>
                        <a href="comments.php">comments</a> <!-- new code -->
                        <a href="References.php">References</a>
                       
                    </div>
                </div>
            </li>
        </ul>

        
        

    </nav>
   
    


    <div class="welcome-content"> 
        
        <div class="text-container">
            <h1>LONDON MADE SIMPLE</h1>
            
        </div>
        

        
        
    </div>
    <button id="dark-mode">Dark Mode</button>
</div>


        



<div class="intro-map-section animate-view">
    
    <div class="intro-text-block">
        <h2>Welcome</h2>
       <p>Welcome to our website dedicated to the exploration of London.</p>
       <p>Here, we aim to provide you with a thoughtful guide through the city's storied streets, rich history, and vibrant cultural scenes. </p>
       <p>Whether you're interested in the historical landmarks that have shaped London or the contemporary experiences that define its present, our site offers a calm and informative journey tailored for you.</p>
       <p>We invite you to explore at your own pace, discover new perspectives, and find the parts of London that speak personally to you.</p>
       <p>Welcome, and we hope you find our resources helpful in your exploration. </p>
       
        <div>
           
            <button id="learn-more-btn">Learn More</button>
        </div>
       
    </div>
    
    
    <div class="map-block animate-view">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.83988659806!2d-0.2664031343031303!3d51.52873980506645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2shr!4v1709986554944!5m2!1sen!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="animate-view"></iframe>
    </div>
</div>




<main>
    
    <section class="info-blocks">
        
        <div class="info-block animate-view">
            
            <img src="assets/Images/abbeymain.jpg" alt="Book Tickets" id="westminster">
            <h2>Historical Landmarks</h2>
            <p>Step into History: Explore Westminster Abbey, Tower of London, and the Iconic London Eye!</p>
            <a href="HistoricalLandmarks.php" class="more-info">Learn More</a>
        </div>
        <div class="info-block animate-view">
            <img src="assets/Images/Night.jpg" alt="night" id="nightlife">
            <h2>Nightlife</h2>
            <p>Experience  Nightlife: From Buzzing Clubs and Cozy Pubs to Restaurants</p>
            <a href="NightLife.php" class="more-info">Learn More</a>
        </div>
        <div class="info-block animate-view">
            <img src="assets/Images/hydepark.jpg" alt="park" id="park">
            <h2>Parks</h2>
            <p>London's Green Oasis Trio: Explore Hyde, Richmond, and Regent's Parks.</p>
            <a href="Parks.php" class="more-info">Learn More</a>
        </div>
        
        <div class="info-block animate-view">
            <img src="assets/Images/EnglishFood.jpg"  alt="Book Tickets" id="food">
            <h2>London For Foodies</h2>
            <p>Discover London's Diverse Culinary Scene: Your First Bite into a World of Flavors!</p>
            <a href="LondonForFoodies.php" class="more-info">Learn More</a>
            
        </div>
        
        <div class="info-block animate-view">
            <img src="assets/Images/Vintage.jpg" alt="vintage" id="Vintage">
            <h2>Vintage London</h2>
            <p>Vintage London Unveiled: Journey Through Historic Streets, Undergrounds, and Timeless Shops.</p>
            <a href="VintageLondon.php" class="more-info">Learn More</a>
        </div>
        <div class="info-block animate-view">
            <img src="assets/Images/building.jpg" alt="building" id="Literary">
            <h2>Tallest Buildings</h2>
            <p>Reaching New Heights: Discover The Shard, The Gherkin, One Canada Square, and The Leadenhall Building.</p>
            <a href="TallestBuildings.php" class="more-info">Learn More</a>
        </div>
        
        <div class="info-block animate-view">
            <img src="assets/Images/Shopping.jpg"  alt="Book Tickets" id="Shopping">
            <h2>Shopping</h2>
            <p>Explore Westfield London for a unique blend of fashion, dining, and entertainment in a striking setting.</p>
            <a href="Shopping.php" class="more-info">Learn More</a>
        </div>
        <div class="info-block animate-view">
            <img src="assets/Images/Sports.jpg" alt="sports" id="Sports">
            <h2>Football</h2>
            <p>London football shines with Arsenal, Chelsea, and Fulham's stars.</p>
            <a href="Football.php" class="more-info">Learn More</a>
        </div>
        <div class="info-block animate-view">
            <img src="assets/Images/Transport.jpg" alt="transport" id="Transport">
            <h2>Transport</h2>
            <p>London's transport system, with its Underground, buses, and river services, is essential and dynamic.</p>
            <a href="Transport.php" class="more-info">Learn More</a>
        </div>
    </section>
</main>


<?php include 'footer.php'?> <!-- new footer -->
</body>
</html>
