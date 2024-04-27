<?php 
$pageTitle = 'Historical Landmarks'; // new code 
require 'config.php'; // new code 
include 'header.php'; // jnew code //changed for all navbars to .php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historical Landmarks</title>
    <link rel="stylesheet" href="assets/CSS/styles.css" />
  </head>
  <body>
 

   

    



    <main>
      <section class="section-container animate-view"> <!-- new code --> 
        <div class="Historical-content animate-view">
          <div class="description-historical animate-view">
            <h2>Westminster Abbey</h2> 
            <p>
              Westminster Abbey stands as one of London's most iconic and
              historically significant landmarks, renowned for its stunning
              Gothic architecture and rich cultural heritage.
            </p>
            <p>
              Founded over a thousand years ago, the abbey has served as the
              coronation church for English monarchs since 1066 and has
              witnessed numerous royal weddings and state ceremonies throughout
              its history.
            </p>
            <p>
              Visitors to Westminster Abbey can explore its magnificent
              interiors, which feature intricate stained glass windows,
              intricate stone carvings, and the tombs of many notable figures,
              including kings, queens, poets, and scientists.
            </p>
            <p>
              The abbey's Poets' Corner is particularly famous, honoring
              literary giants such as William Shakespeare, Charles Dickens, and
              Geoffrey Chaucer.
            </p>
          </div>
          <div class="media-content animate-view"> 
            <img 
              src="assets/Images/abbey4.jpg"
              alt="Historical Landmark"
              id="abbey"
            />
            <iframe class="animate-view"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1241.8769575138601!2d-0.12886236092261016!3d51.49938321269061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c4ba43352f%3A0xda8effa2059b537a!2sWestminster%20Abbey!5e0!3m2!1sen!2shr!4v1710010155476!5m2!1sen!2shr"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe> 
          </div>
        </div>
      </section>

      <section class="section-container animate-view">
        <div class="Historical-content animate-view">
          <div class="description-historical animate-view">
            <h2>Tower of London</h2>
            <p>
              The Tower of London stands as a formidable symbol of England's
              rich and often turbulent history, dating back nearly a thousand
              years.
            </p>
            <p>
              Originally built as a royal palace and fortress by William the
              Conqueror in the 11th century, it has since served variously as a
              prison, treasury, and even a zoo.
            </p>
            <p>
              Today, the Tower is a UNESCO World Heritage Site and one of
              London's most popular tourist attractions, drawing visitors with
              its intriguing stories of royal intrigue, execution, and ghostly
              legends. Its iconic White Tower houses the Royal Armouries,
              displaying an impressive collection of arms and armor spanning
              centuries of British military history.
            </p>
            <p>It is a symbol of power</p>
          </div>
          <div class="media-content animate-view">
            <img
              src="assets/Images/LondonTower.jpg"
              alt="Tower of London"
              id="tower-london"
            />
            <iframe class="animate-view"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.277992836581!2d-0.07852422303539416!3d51.50811571065067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760349331f38dd%3A0xa8bf49dde1d56467!2sTower%20of%20London!5e0!3m2!1sen!2shr!4v1710031715440!5m2!1sen!2shr"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>

      <section class="section-container animate-view">
        <div class="Historical-content animate-view">
          <div class="description-historical animate-view">
            <h2>London Eye</h2>
            <p>
              The London Eye stands as an iconic landmark on the banks of the
              River Thames, offering breathtaking panoramic views of the city's
              skyline.
            </p>
            <p>
              As one of the world's tallest Ferris wheels, it has become a
              must-visit attraction for tourists and locals alike.
            </p>
            <p>
              Constructed to celebrate the turn of the millennium, the London
              Eye provides a unique and unforgettable experience, with each
              rotation lasting approximately 30 minutes.
            </p>
            <p>
              From its glass capsules, visitors can enjoy spectacular vistas of
              famous landmarks such as Big Ben, Buckingham Palace, and the Tower
              Bridge, making it a highlight of any visit to London.
            </p>
            <p>Its standing at 135 meters tall</p>
          </div>
          <div class="media-content animate-view">
            <img
              src="assets/Images/LondonEye.jpg"
              alt="London Eye"
              id="london-eye"
            />
            <iframe class="animate-view"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5464714639306!2d-0.12439010677009861!3d51.503189638338206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2shr!4v1710031928135!5m2!1sen!2shr"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </section>
    </main>

    <?php include 'footer.php'?> <!-- new footer -->
   
  </body>
</html>
