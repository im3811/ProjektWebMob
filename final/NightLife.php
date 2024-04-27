
<?php 
$pageTitle = 'NightLife'; // new code 
require 'config.php'; // new code 
include 'header.php'; // jnew code //changed for all navbars to .php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Night Life</title>
    <link rel="stylesheet" href="assets/CSS/styles.css" />
  </head>
  <body>
    

   

  

    

    <main>
      <section class="section-Nightlife animate-view">
        <div class="highlight-Nightlife animate-view">
          <div class="text-highlight animate-view">
            <h2>Clubs</h2>
            <p>
              The diverse reasons people flock to London clubs, from dancing and
              socializing to personal expression and escapism, reflect a deep
              psychological need for connection and adventure in nightlife.
            </p>
            <p>
              These venues serve as communal spaces where individuals can
              explore and express their identities
            </p>
            <p>
              his multifaceted appeal draws individuals seeking to showcase
              their style, connect with others, and immerse themselves in an
              environment where every night offers a new adventure.
            </p>
            <p>
              The psychological allure of these spaces lies in their ability to
              foster connections, celebrate individuality, and provide an
              escape, making them a pivotal part of London's cultural fabric.
            </p>
          </div>
          <div class="Nightlife-image animate-view">
            <img src="assets/Images/Club.jpg" id="club" alt="pub">
          </div>
        </div>
      </section>
      <section class="section-highlight animate-view">
        <div class="highlight-Nightlife animate-view">
          <div class="text-highlight animate-view">
            <h2>Pubs</h2>
            <p>
              Pubs in London serve as a cornerstone of British culture, acting
              as a gathering place for friends, family, and communities to
              socialize and unwind.
            </p>
            <p>
              Their historical evolution from Roman tabernae to Anglo-Saxon
              alehouses highlights their long-standing role in societal
              interaction, where discussions and community matters are
              commonplace.
            </p>
            <p>
              Additionally, the unique names and signs of pubs, often heraldic
              or royal, contribute to their charm and identity, making them an
              integral part of the community's social fabric.
            </p>
            <p>
              For more details on British pub culture and etiquette, you can
              visit Eating Europe's guide.
            </p>
          </div>
          <div class="Nightlife-image animate-view">
            <img src="assets/Images/LondonPub.jpg" id="pub" alt="pub">
          </div>
        </div>
      </section>
      <section class="section-highlight animate-view">
        <div class="highlight-Nightlife animate-view">
          <div class="text-highlight animate-view">
            <h2>Restaurants</h2>
            <p>
              People love dining out in London's restaurants for several
              reasons, including the fun and social experience, the status
              symbol it represents, the convenience of saving time, and the
              opportunity to try new foods.
            </p>
            <p>
              Restaurants offer a break from daily routines, providing an
              enjoyable way to socialize, explore culinary diversity, and engage
              in a form of recreation that goes beyond just satisfying hunger.
            </p>
            <p>
              It's a way to step away from the everyday, connect with others,
              and indulge in the city's rich culinary tapestry, turning mealtime
              into a delightful escapade of taste and social interaction.
            </p>
          </div>
          <div class="Nightlife-image animate-view">
            <img src="assets/Images/Restaurant.jpg" id="res" alt="pub">
          </div>
        </div>
      </section>
    </main>

    <?php include 'footer.php'?> <!-- new footer -->

   
  </body>
</html>
