<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="png" href="assets/Images/england-svgrepo-com.svg"> <!-- new code -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle?></title>
    <link rel="stylesheet" href="assets/CSS/styles.css">
   
   
</head>
<body>

 

<div id="google_translate_element"></div>
    <button id="dark-mode">Dark Mode</button>


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
          <a href="NightLife.php">Night Life</a>
        </div>
      </div>
    </div>
    <h1 class="header-title"><?php echo $pageTitle; ?></h1>
    <header class="site-header">
      <nav class="site-navigation">
        <ul class="nav-list">
          <li>
            <a href="#">Capital Classics</a>
            <ul class="dropdown">
              <li><a href="Parks.php">Parks</a></li>
              <li>
                <a href="HistoricalLandmarks.php">Historical Landmarks</a>
              </li>
              <li><a href="VintageLondon.php">Vintage London</a></li>
              <li><a href="GradeCategory.php">Grade Category</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Shop & Explore</a>
            <ul class="dropdown">
              <li><a href="Shopping.php">Shopping</a></li>
              <li><a href="NightLife.php">Night Life</a></li>
              <li><a href="Transport.php">Transport</a></li>
              <li><a href="TallestBuildings.php">Tallest Buildings</a></li>
              <li><a href="comments.php">comments</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Welcome Hub</a>
            <ul class="dropdown">
              <li><a href="Football.php">Football</a></li>
              <li><a href="LondonForFoodies.php">London for Foodies</a></li>
              <li><a href="index.php">Homepage</a></li>
              <li><a href="References.php">References</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>


