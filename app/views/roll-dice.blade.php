
<!DOCTYPE html>
<html>
<head>
    <title>Roll Dice</title>
</head>
<body>

<h1>Roll Dice</h1>

<p>{{{$message}}}</p>

<p>The number was {{{$number}}}</p>

<p>Your guess was {{{$guess}}}</p>

 <a href="{{{action('HomeController@rollDice', 1) }}}">Guess 1</a>

 <a href="{{{action('HomeController@rollDice', 2) }}}">Guess 2</a> 

 <a href="{{{action('HomeController@rollDice', 3) }}}">Guess 3</a> 

 <a href="{{{action('HomeController@rollDice', 4) }}}">Guess 4</a> 

 <a href="{{{action('HomeController@rollDice', 5) }}}">Guess 5</a> 

 <a href="{{{action('HomeController@rollDice', 6) }}}">Guess 6</a>  

</body>
</html>