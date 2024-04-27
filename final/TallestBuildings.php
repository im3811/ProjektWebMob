
<?php 
$pageTitle = 'Tallest Buildings'; // new code 
require 'config.php'; // new code 
include 'header.php'; // jnew code //changed for all navbars to .php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tallest Buildings</title>
    <link rel="stylesheet" href="assets/CSS/styles.css" />
  </head>
  <body>
    

 

    

   
    

    

    <main class="main-content-area animate-view">
      <div class="building-image">
        <div class="thecard">
          <div class="thefront">
            <img src="assets/Images/OneCanada.jpg" alt="candaBuilding">
          </div>
          <div class="theback">
            <h2>One Canda Square</h2>
            <p>
              One Canada Square in Canary Wharf, London, became the tallest
              building in the UK upon its completion in 1991, standing at 770
              feet. Its notable height was achieved despite air traffic safety
              regulations due to its proximity to London City Airport.
            </p>
            <p>
              Designed by architect César Pelli, it was part of the Canary Wharf
              redevelopment project, aimed at modernizing and revitalizing the
              area.
            </p>
            <p>
              The tower's design and height reflect London's ambition to create
              a new financial hub.
            </p>
          </div>
        </div>
      </div>

      <div class="building-image">
        <div class="thecard">
          <div class="thefront">
            <img src="assets/Images/Shard.jpg" alt="Shard">
          </div>
          <div class="theback">
            <h2>The Shard</h2>
            <p>
              The Shard in London, standing at 309.6 meters, is the tallest
              building in the United Kingdom.
            </p>
            <p>
              Its design, envisioned by Italian architect Renzo Piano, was
              inspired by the spires of London churches and the masts of tall
              ships, aiming to create a spire-like sculpture emerging from the
              River Thames.
            </p>
            <p>
              The Shard's pyramid shape and glass facade make it a distinctive
              part of London's skyline, symbolizing modern architectural
              ambition and innovation.
            </p>
          </div>
        </div>
      </div>

      <div class="building-image">
        <div class="thecard">
          <div class="thefront">
            <img src="assets/Images/Hall.jpg" alt="Hall">
          </div>
          <div class="theback">
            <h2>The Leadenhall Building</h2>
            <p>
              The Leadenhall Building, also known as The Cheesegrater due to its
              distinctive shape, stands at 225 meters tall.
            </p>
            <p>
              It was designed by Rogers Stirk Harbour + Partners and opened in
              July 2014.
            </p>
            <p>
              The building's unique wedge shape, inspired by practical design
              considerations and aesthetic appeal, contributes to its notable
              height, making it a significant part of London's financial
              district skyline.
            </p>
          </div>
        </div>
      </div>

      <div class="building-image">
        <div class="thecard">
          <div class="thefront">
            <img src="assets/Images/Gherkin.jpg" alt="Gherkin">
          </div>
          <div class="theback">
            <h2>The Gherkin</h2>
            <p>
              The Gherkin, formally known as 30 St Mary Axe, is an iconic
              skyscraper located in the heart of London's financial district.
            </p>
            <p>
              Designed by architect Norman Foster, it stands out with its
              distinctive bullet-shaped design and glass exterior.
            </p>
            <p>
              Completed in 2003, it has become one of London's most recognizable
              landmarks, offering panoramic views of the city from its upper
              floors.
            </p>
            <p>
              The building is renowned for its energy-efficient design,
              featuring diagonal bracing and a spiraling glass façade that helps
              reduce wind loads and energy consumption.
            </p>
            <p></p>
          </div>
        </div>
      </div>
    </main>

    <?php include 'footer.php'?> <!-- new footer -->

    
  </body>
</html>
