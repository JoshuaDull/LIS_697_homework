<DOCTYPE HTML>
  <html>
  <head>
    <meta charset = 'utf-8'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- decided to start being more responsible with my ^CSS^-->
  </head>
  <body>
<?php

$isbn = "123456789X";
$results = isbn_tester($isbn);
if ($results == true)
  {
    echo "<br> <p>$isbn</p>" . "<br>NOW THAT'S WHAT I CALL A GINUINE ISBN #<br><br><div>| m  |<br>|  o |<br>| r  |<br>|  e |<br>___info___<br>\|||||||/<br>\|||||/<br>\|||/<br>\|/<br>V<br></div>";
    echo "<a href=http://www.isbnsearch.org/isbn/$isbn>L I N K</a><br><br><br>";
  } elseif ($results == false)
  {
    echo "NOPE";
  }

echo "<div class=sonic> SONIC</div> or <div class=tails>TAILS</div><br>";
echo sonic_or_tails(1) . "<br>";
echo sonic_or_tails(3) . "<br>";
echo sonic_or_tails(5) . "<br>";
echo sonic_or_tails(7) . "<br>";
echo sonic_or_tails(9) . "<br><br><br><br><br>";


echo double_trouble();

#--------FUNCTIONS----------
#isbn tester
function isbn_tester($isbn)
{
  if (preg_match("/^[0-9X]{10}$/", $isbn))
  {
    $a = substr($isbn, 0, 1);
    $b = substr($isbn, 1, 1);
    $c = substr($isbn, 2, 1);
    $d = substr($isbn, 3, 1);
    $e = substr($isbn, 4, 1);
    $f = substr($isbn, 5, 1);
    $g = substr($isbn, 6, 1);
    $h = substr($isbn, 7, 1);
    $i = substr($isbn, 8, 1);
    if (substr($isbn, 9, 1) == "X")
    {
      $j = 10;
    } else {
      $j = substr($isbn, 9, 1);
    }
    $total = ((10*$a)+(9*$b)+(8*$c)+(7*$d)+(6*$e)+(5*$f)+(4*$g)+(3*$h)+(2*$i)+(1*$j));
    if ($total % 11 == 0)
    {
      $results = true;
    } else {
      $results = false;
    }

    return $results;
  } else {
    echo "<h3> NICE TRY PUNK!</p>";

}}

#sonic or tails generator

function sonic_or_tails($input)
{
  for ($count = $input; $count >= 1; --$count)
  {
    if (mt_rand(1,2) == 1)
    {
      echo "<img class=result src=http://kandipatterns.com/images/patterns/characters/12081_Classic_Sonic_.png>";
    } else {
      echo "<img class=result src=http://kandipatterns.com/images/patterns/characters/12076_Classic_Tails.png>";
    }
  }
}

#double tails

function double_trouble()
{
  $count = 0;
  $x = 0;
  $y = 1;
  do {
    ++$count;
    $x = mt_rand(1,2);

    if ($x == 1)
    {
      echo "<img class=result src=http://kandipatterns.com/images/patterns/characters/12081_Classic_Sonic_.png>";
      $y = 1;
    } else {
      echo "<img class=result src=http://kandipatterns.com/images/patterns/characters/12076_Classic_Tails.png>";
      if ($y == 1)
      {
        $y = 2;
      } else {
        $y = 3;
      }

    }
  } while ($y != 3);
  return "<h3 class=try> IT TOOK " . $count . " TRIES TO GET DOUBLE TAILS!</p>";
}
 ?>
  </body>
  </html>
