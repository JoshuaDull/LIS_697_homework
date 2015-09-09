<DOCTYPE HTML>
<?php

$cent = 697;

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


echo $dollar . " dollars <br>";
echo $quarter . " quarters <br>";
echo $dime . " dimes <br>";
echo $nickel . " nickels <br>";
echo $cent . " cents <br>";

?>
