<?php
    require 'abrir_s.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    
    <div class="container-register">
               <?php require 'header.php'; ?>

        
        <img src="images/art01.jpg"  id="imasec">

        <div class="principal-register">
            <main>
                <section class="register">
                    <h1>Register</h1>
                    <p>To attend the Roux Academy 2016 Contemporary Art Conference, 
                        please complete the information below.
                    </p>
                </section>

                <section class="PersonalInfo">
                    <h2>Personal Info</h2>
                    <br>
                    <label for="">Name*</label>
                    <input type="text" placeholder="Last, First" >
                    <br>
                    <label for="">Company Name</label>
                    <input type="text" >
                    <br>
                    <label for="">Email*</label>
                    <input type="email" name="" id="">
                </section>

                <section class="RequestTime">
                    <h2>Request Time</h2>
                    <div>
                        <input type="radio" name="" id=""> Question
                    </div>
                    <div>
                        <input type="radio" name="" id=""> Comment
                    </div>

                </section>

                <section class="Comment">
                    <h2>Comment</h2>
                    <textarea name="" id="" cols="40" rows="5"></textarea>
                </section>

                <section class="suscrib">
                    <input type="checkbox" name="" id="">Subscribe to our mailing list?
                    <br>
                    <br>
                    <h3>How did you hear about us?</h3>
                </section>

                <section class="selec">
                    <select name="" id="">
                        <option selected>Choose...</option>
                        <option value="">Choose...</option>
                        <option value="">A friend</option>
                        <option value="">Facebook</option>
                        <option value="">Twitter</option>
                    </select>
                    <input type="submit" value="aceptar" name="enviar">
                </section >


            </main>

            <aside class="aside-resister">
                <section class="artist">
                    
                    <h2>Featured Artists</h2>
                    <p>Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.</p>
                    
                   
                    
                    <?php require 'cuadro.php'; ?>

                        
                       
                    
                </section>

            </aside>

        </div>

       <?php require 'footer.php'; ?>


    </div>
    
</body>
</html>