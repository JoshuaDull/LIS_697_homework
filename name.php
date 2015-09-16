<?php

$full = ("Joshua Lee Dull");

echo substr($full, 0, 6) . "<br>";
echo strtoupper(substr($full, 7, 3)) . "<br>";
echo substr($full, 11, 4) . "<br>";

echo strtolower(str_shuffle($full)) . "<br>";

echo substr($full, -15, 6);
echo substr($full, -9, 4);
echo substr($full, -5, 5) . "<br><br>";

function my_new_function($parameter1, $parameter2)
{
	statements;
}

function tip_calc($meal, $tip_percent)
{
	$tip = $meal * $tip_percent;
	return ($tip + $meal);
}
$meal = 200;
$tip_percent = .2;
$total = tip_calc($meal, $tip_percent);
echo "Meal($$meal) and tip is $$total ";

function sing_song($bottles)
{
	$x = 100;
for ($count = $x; $count >= 1; $count)
{
	if ($count == 1)
{
	$b = "bottle";
} else {
	$b = "bottles";
}
  echo "$count $b of beer on the wall. $count $b of beers. Take one down, pass it around "; 
  echo (--$count);
  if ($count ==1)
  {
	  $bo = "bottle";
  } else {
	  $bo = "bottles";
  }
  echo " $bo of beer on the wall. <br><br><br>";
}
echo "...and we all fall down...";
}

sing_song(99);

?>