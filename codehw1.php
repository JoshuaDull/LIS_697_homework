<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body style ="background-color:pink">
<?php

$change = $cent = 697;
$exact = ($change / 100);

if ($cent >= 100)
  {
    $dollar = (int) ($cent / 100);
    $cent %= 100;
  } else {
    $dollar = 0;
  }

if ($cent >= 25)
  {
    $quarter = (int) ($cent / 25);
    $cent %= 25;
  } else {
    $quarter = 0;
  }

if ($cent >= 10)
  {
    $dime = (int) ($cent / 10);
    $cent %= 10;
  } else {
    $dime = 0;
  }

if ($cent >=5)
  {
    $nickel = (int) ($cent / 5);
    $cent %= 5;
  } else {
    $nickel = 0;
  }

echo <<<_END
The cashier tried to hand me a sack of $change pennies!<br>
"I'm not a human iPhone," he sighed...
"fiiinnnne, just tell me how many dollars or quarters or whatever. Who uses cash anyway....?"
<br>I persist and ask for "$dollar dollars, $quarter quarters, $dime dimes, $nickel nickels, and $cent pennies"
<br>That $$exact was burning a whole in my pocket. So I head down to the bar.
<br>Lucky me, they are playing my favorite song.<br>

_END;


$x = 18;
for ($count = $x; $count >= 1; $count)
{
  echo "$count bottles of beer on the wall. $count bottles of beers. <br> Take one down, pass it around " . (--$count) . " bottles of beer on the wall. <br>";
}
echo "...and we all fall down...";
?>
</body>
</html>
