<DOCTYPE HTML>
  <html>
  <head>
    <meta charset = 'utf-8'>
  </head>
  <body  style ="background-color:black;color:white;text-align:center;font-size:125%;font-family:monospace">
<?php

$isbn = "156881111X";
$test = isbn_tester($isbn);

#--------FUNCTION----------
function isbn_tester($isbn)
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
    echo $isbn . "<br>THAT'S A GINUINE ISBN#<br>GO HERE<br>| m  |<br>|  o |<br>| r  |<br>|  e |<br>___info___<br>\||||||/<br>\||||/<br>\||/<br>\/";
    #echo "<a href="http://www.isbnsearch,org/isbn/$isbn">link</a>;
  } else {
    echo "NOPE";
  }

  return $total;
}

 ?>
  </body>
  </html>
