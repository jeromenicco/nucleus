<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="banniere-booking banniere-home">
            <?php include "header.php" ?>
        </div>
    </header>

  

    <main class ="main-font-color">
        <div class="title-content">
            <h2>.Booking</h2>
        </div>
        <div class="vide">
        </div>
        <div class="intro-content">
            <p>You can book your futur travel here, put your destination, your budget, your dates and personal information and give us your money. </p>
        <div class="container-all">  
            <div class="input-container">
                <div class="case">
                    <label for="destination"></label>
                    <input id="destination" placeholder="Destination" type="text" name="destination" class="champs"/>
                </div>
                <div class="case">
                    <label for="budget"></label>
                    <input id="budget" placeholder="Budget" type="text" name="buget" class="champs"/>  
                </div>
            </div>
            <div class="input-container">
                <div class="case">
                    <label for="nbAdults"></label>
                    <input id="nbAdults" placeholder="Number of adults" type="text" name="nbAdults" class="champs"/>
                </div>
                <div class="case">
                    <label for="nbChildren"></label>
                    <input id="nbChildren" placeholder="Number of childrens" type="text" name="nbChildren" class="champs"/>
                </div>
            </div>
            <div class="input-container">
                <div class="case">
                    <label for="departure">Departure</label>
                    <br>
                    <input  type="date" id="departure" name="departure"  value="3020-10-09"min="3020-10-09" max="3030-12-31" class="date">
                </div>
                <div class="case">
                    <label for="return">Return</label>
                    <br>
                    <input type="date" id="return" name="return" value="3020-10-10"min="3020-10-10" max="3030-12-31" class="date">
                </div>
            </div>
            <div class="input-container">
                <div class="case">
                    <label for="civility"></label>
                        <select name="civility" id="civility" class="civility">
                            <option value="">--Civility--</option>
                            <option value="monsieur">M.</option>
                            <option value="madame">MME.</option>
                            <option value="robot">Robot.</option>
                            <option value="others">Others.</option>
                        </select>
                </div>
                <div class="case">
                <label for="email"></label>
                    <input id="email" placeholder="Email" type="text" name="email" class="champs"/>
                </div>
            </div>
            <div class="input-container">
                <div class="case">
                    <label for="firstname"></label>
                    <input id="firstname" placeholder="First name" type="text" name="firstname" class="champs"/> <br>
                </div>
                <div class="case">
                    <label for="secondname"></label>
                    <input id="secondname" placeholder="Second name" type="text" name="secondname" class="champs"/>
                </div>
            </div>
            <div class="input-container">
                <div class="case">
                    <label for="adress"></label>
                    <input id="adress" placeholder="Adress" type="text" name="adress" class="champs"/>
                </div>
                <div class="case">
                    <label for="planet"></label>
                    <input id="planet" placeholder="Planet" type="text" name="planet" class="champs"/>
                </div>
            </div>
            <div class="input-container comment">
                <label for="comment"></label>
                <textarea id="comment" name="comment" placeholder="Comment"></textarea>
            </div>
            <div class="checkbox-container">
                <div class="agree">
                    <input type="checkbox" name="participate" value="true" id="participate">
                    <label for="participate">I participate in the trip</label>
                </div>
                <div class="agree">
                    <input type="checkbox" name="accept" value="true" id="accept">
                    <label for="accept">I accept the general conditions</label>
                </div>
                <div class="agree">
                    <input type="checkbox" name="contact" value="true" id="contact">
                    <label for="contact">I agree to be contacted by email</label>
                </div>
            </div>
            <div class="book-container">
                <label for="button"></label> 
                <input class="button" id="book" type="submit" value="Book"/>        
            </div>
        </div>
    </main>
    <?php include 'burger.php'; ?>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="burger.js"></script>
    <script src="apparition.js"></script>
    <script src="card.js"></script>
    <script src="popBtn.js"></script>
    <script src="meteo.js"></script>
    <script src="navbar.js"></script>
    <script src="nav.js"></script>
</body>

</html>
