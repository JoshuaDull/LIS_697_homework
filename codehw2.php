<DOCTYPE HTML>
  <html>
  <head>
    <meta charset = 'utf-8'>
  </head>
  <body  style ="background-color:black;color:white;text-align:center;font-size:125%;font-family:monospace">
<?php

$isbn = "156881111X";
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
$test = isbn_tester($a,$b,$c,$d,$e,$f,$g,$h,$i,$j);

#--------FUNCTION----------
function isbn_tester($a,$b,$c,$d,$e,$f,$g,$h,$i,$j)
{
  $total = ((10*$a)+(9*$b)+(8*$c)+(7*$d)+(6*$e)+(5*$f)+(4*$g)+(3*$h)+(2*$i)+(1*$j));
  if ($total % 11 == 0)
  {
    echo "THAT'S A GINUINE ISBN#";
  } else {
    echo "NOPE";
  }

  return $total;
}

 ?>
  </body>
  </html>
