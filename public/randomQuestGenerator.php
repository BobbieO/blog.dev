<?php

function pageController() 
{
    $bodyParts = ["hearts", "livers", "arms", "brains", "hides", "spleens", "pancreases", "kidneys", "stomachs", "heads", "legs"];

    $adjectives = ["hearty", "strong", "lovely", "diseased", "spotty", "mutated", "fast", "slow", "angry", "cuddly", "unusual", "smelly", "adorable", "intelligent", "hideous", "cute"];

    $nouns = ["cows", "boars", "rats", "ogres", "rocs", "dragons", "dwarves", "gnomes", "goblins", "undead", "elves", "bears", "elves"];

    // pick random index of parts array
    $randomPart = array_rand($bodyParts);

    //pick random index of adjectives array
    $randomAdj = array_rand($adjectives);

    //pick random index of nouns arrays
    $randomNoun = array_rand($nouns);

    //variables for holding the randomly generated adjective and noun values (to be inside function)
    $fetchPart = $bodyParts[$randomPart];
    $fetchAdj = $adjectives[$randomAdj];
    $fetchNoun = $nouns[$randomNoun];

    //to generate random number
    $number = rand(2, 50);

    //to put message array into
    $data = array();
    
    //holds contatenated message in a data variable as an array with key of scrollMsg and value of the entire message.
    $data = [
        'scrollMsg' => $number . " " . $fetchPart . " from " . $fetchAdj . " " . $fetchNoun
    ];

    //return the variable
    return $data;
}

//extract returns an array--both key and value--in this case the contents of $data.
    //this allows the 'scrollMsg' key in the $data variable to be accessed in the html like a variable,
    // which returns the value inside the php tags in the html.
extract(pageController());

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <title>BHO Random Quest Generator</title>
    
    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="/css/randomQuestGenerator.css">

</head>
<body id="background">
    <main class="bigScroll">
    <div class="container">
        <div class="col s12">
            <div class="dialogue row">
                <div class="col s12">
                    <!-- to output randomized stuff to proper spot on page -->
                    <h1 class="showMe text">Fetch me <?= $scrollMsg;?>!</h1>
                        <p class="wizTalk text">We don't have time for menial tasks.</p>
                </div>
            </div>

            <div class="position row">
                <div class="col s4 objects right-align">
                    <span class="wizard"><img class="responsive-img" src="/img/questWizard.png"></span>
                </div>

                <div class="col s4 objects">
                    <span class="miniScroll"><img class="responsive-img"  src="/img/rolledScroll.png"></span>
                </div>

                <div class="col s4 objects right-align">
                    <span class="warrior"><img class="responsive-img"  src="/img/warrior.png"></span>
                </div>
            </div>

            <div class="row" id="attriBtn">
                <div class="col s6">
                    <p class="small">Some images from Perfect World International, arc &#153</p>
                </div>
                <div class="col s6">
                    <button id="newQuest">New Quest</button>
                </div>
            </div>
        </div>
    </div>
</main>
   
<script src="/js/jquery.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

<script src="/js/randomQuestGenerator.js"></script>         


</body>
</html>


