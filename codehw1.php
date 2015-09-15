<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body style ="background-color:black;color:white;text-align:center;font-size:125%;font-family:monospace">
<?php

$change = $cent = 1496;
$exact = ($change / 100);

if ($cent >= 100)
  {
    $dollar = (int) ($cent / 100);
    $cent %= 100;
  } else {
    $dollar = 0;
  }

if ($dollar == 1)
  {
    $d = "dollar";
  } else {
    $d = "dollars";
  }

if ($cent >= 25)
  {
    $quarter = (int) ($cent / 25);
    $cent %= 25;
  } else {
    $quarter = 0;
  }

  if ($quarter == 1)
    {
      $q = "quarter";
    } else {
      $q = "quarters";
    }

if ($cent >= 10)
  {
    $dime = (int) ($cent / 10);
    $cent %= 10;
  } else {
    $dime = 0;
  }

  if ($dime == 1)
    {
      $di = "dime";
    } else {
      $di = "dimes";
    }

if ($cent >=5)
  {
    $nickel = (int) ($cent / 5);
    $cent %= 5;
  } else {
    $nickel = 0;
  }

  if ($nickel == 1)
    {
      $n = "nickel";
    } else {
      $n = "nickels";
    }

  if ($cent == 1)
    {
      $c = "penny";
    } else {
      $c = "pennies";
    }

  if ($change == 1)
    {
      $ch = "penny";
    } else {
      $ch = "pennies";
    }

echo <<<_END
<br>After purchasing 2 packs of <span style="color:yellow">Juicyfruit</span>, a single loose <span style="color:teal">Newport 100</span>, and large can of <span style="color:lightgreen">Arizona Iced Tea</span>,
<br>the cashier tried to hand me a sack of <span style="font-size:200%">$change $ch!</span><br>
<br>Being a very particular person, I specifically ask for:
  <h3>$dollar <span style="color:green">$d</span></h3>
  <h3>$quarter <span style="color:slategray">$q</span></h3>
  <h3>$dime <span style="color:silver">$di</span></h3>
  <h3>$nickel <span style="color:grey">$n</span></h3>
  <h3> and $cent <span style="color:coral">$c</span></h3>
<br>That $$exact was burning a whole in my pocket. So I head down to the bar.
<br>Lucky me, they are playing my favorite song.<br><br>

_END;


$x = 100;
for ($count = $x; $count >= 1; $count)
{
  echo "$count bottles of beer on the wall. $count bottles of beers.  Take one down, pass it around " . (--$count) . " bottles of beer on the wall. <br><br><br>";
}
echo "...and we all fall down...";

?>
</body>
</html>
