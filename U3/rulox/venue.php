<?php
    require 'abrir_s.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    
    <div class="container-venue">
                <?php require 'header.php'; ?>

        <img src="images/art01.jpg"  id="imasec">

        <div class="contenido-venue">
            <main>
                <h1>The Venue</h1>
                <section class="TheVenue">
                    <img src="images/hotel_contempo.jpg" alt="">
                    <p>
                        Hotel Contempo is the perfect 
                        spot for a gathering of modern artists. 
                        Not only are the conference rooms and 
                        halls decked with breathtaking contemporary 
                        art and sculptures, but the individual 
                        rooms are as unique as the renowned 
                        artists who were commissioned to decorate 
                        them. From the Ross Monroe Purple suite 
                        filled  wall to wall with paintings in his 
                        palette of violet and lavender to the Tess 
                        Lessinger Sculpted Universe suite, with dozens 
                        of original sculptures, including the bronze-casted 
                        toilet, visitors are sure to be intrigued and 
                        comforted during their stay at Hotel Contempo.  
                        For those who opt to stay at another location, 
                        there is no shortage of hotels in Downtown Seattle. 
                        Ranging from shabby chic to the ultimate in 
                        sophistication.
                    </p>
                </section>
                <p>......................................................................................................................................</p>
                
                <section class="PhillipsofBelltown">
                    <img src="images/hotel_phillips.jpg" alt="">
                    <div class="sections-venue">
                        <h3>Phillips of Bell town</h3>
                        <p>Situated amongt the hip, youthful culture 
                            of Downtown Seattle, Phillips of Belltown 
                            is the place to be any time of the day or 
                            night. Choose from Jazz and Rock music at 
                            the various music venues, and shop until 
                            you drop at an assortment of thrift stores 
                            and upscale boutiques. The hotel itself is 
                            a historical gem, with architectural 
                            achievements in every beam, brick, and
                        </p>
                        <p><a class="enlace-gris" href="#">Get Directions</a></p>
                    </div>

                </section>
                <p>......................................................................................................................................</p>

                <section class="TheOtterRenaissanceHotel">
                    <img src="images/hotel_otter.jpg" alt="">
                    <div class="sections-venue">
                        <h3>The Otter Renaissance Hotel</h3>
                        <p>
                            Hotel founder, Henry Chasings, had a 
                            love of otters, having been raised in 
                            an Alaskan village where otters played 
                            out his back door. As his tribute to the 
                            sea creatures of his early days, Henry was 
                            insistent upon having an otter in every hall, 
                            wall, and room inside the Otter Renaissance Hotel. 
                        </p>
                        <p><a class="enlace-gris" href="#">Get Directions</a></p>
                    </div>
                </section>
                <p>......................................................................................................................................</p>
               
                <section class="TheRageHotel">
                    <img src="images/hotel_rage.jpg" alt="">
                    <div class="sections-venue">
                        <h3>The Rage Hotel</h3>
                        <p>
                            Seattle’s South Lake Union district plays 
                            home to the ultra modern Rage Hotel, that 
                            is outfitted with a state-of-the-art computer 
                            and printing facility in the penthouse, and 
                            draws tech professionals from all over the 
                            world for business conferences and vacations, alike.
                        </p>
                        <p><a class="enlace-gris" href="#">Get Directions</a></p>                        
                    </div>
                </section>
                <p>......................................................................................................................................</p>

                <section class="GwendolinesFancy">
                    <img src="images/hotel_gwendoline.jpg" alt="">
                    <div class="sections-venue">
                        <h3>Gwendoline’s Fancy</h3>
                        <p>
                            In the heart of the West Edge district in Seattle, 
                            Gwendoline’s Fancy, named after a Navy submarine 
                            that got lost at sea in 1910, is a central landing 
                            place for history buffs who can immerse themselves 
                            in the Museum of History located in the hotel mezzanine. 
                            For those travelers who aren’t into history, there 
                            are plenty of other nearby sights to keep them 
                            entertained, including Pike Place Market and the Seattle Art Museum.
                        </p>
                        <p><a class="enlace-gris" href="#">Get Directions</a></p>                        
                    </div>
                </section>
            
            </main>

            <aside class="aside-venue">
                <section class="artist">
                    
                    <h2>Featured Artists</h2>
                    <p>La Academia Roux selecciona aproximadamente 200 piezas 
                        distintas de arte contemporáneo para exhibir en su 
                        exhibición colectiva. A nueve personas se les otorga 
                        su propia sala de exposiciones para exhibir colecciones 
                        completas o piezas temáticas. Cada artista destacado 
                        tiene la oportunidad de hablar en la conferencia para 
                        compartir su visión, perspectiva y técnicas con los asistentes 
                        a la conferencia.</p>
                    
            <?php require 'cuadro.php'; ?>

                    
                </section>

                <section id="comingtoevent">
                    <h2 class="highlight">Coming to the event?</h2>
                    <h3 class="gris">Check out our mobile site</h3>
                    <p>Our mobile site contains schedules, and exhibit/ artist details, accessible simply by scanning QR codes located all around the venue exhibit halls.</p>
                    <p><img src="images/iphone.png" alt="iPhone" id="iphone"</p>
                    <p><a class="enlace-gris" href="#">Roux Mobile</a></p>
                  </section>


            </aside >
        </div>

       <?php require 'footer.php'; ?>
 
        

    </div>

</body>
</html>