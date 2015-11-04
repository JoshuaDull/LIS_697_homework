<DOCTYPE HTML>
  <html>
  <head>
    <meta charset = 'utf-8'>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<?php

# madness

$book_list = array(
        array("PHP and MySQL Web Development", "Luke Welling", 144, "Paperback", 31.63),
        array("Web Design with HTML, CSS, JavaScript and jQuery", "Jon Duckett", 135, "Paperback", 41.23),
        array("PHP Cookbook: Solutions & Examples for PHP Programmers", "David Sklar", 14, "Paperback", 40.88),
        array("JavaScript and JQuery: Interactive Front-End Web Development","Jon Duckett",251,"Paperback",22.09),
        array("Modern PHP: New Features and Good Practices","Josh Lockhart",7,"Paperback",28.49),
        array("Programming PHP","Kevin Tatroe",26,"Paperback",28.96),
);#array of each book's info

echo "<table class=book><tr><td>Title</td><td>Author</td><td>Pages</td><td>Type</td><td>Price</td></tr>";
foreach ($book_list as $index => $book) {
  echo "<tr>"; #each index gets it's own row
  foreach ($book as $key => $entry) {
    echo "<td>";
    print $entry;#each entry now gets its own cell in its row
    echo "</td>";
  } echo "</tr>";
}
$sum = ($book_list[0][4] + $book_list[1][4] + $book_list[2][4] + $book_list[3][4] + $book_list[4][4] + $book_list[5][4]);
$average = ($sum / 6);
$average_price = round ($average, 2, $mode = PHP_ROUND_HALF_UP);
echo "<tr><td></td><td></td><td></td><td></td><td>Average Price: $$average_price</td></tr></table>";


#Let's toss some coins
echo "<div><br><br>";
$a = 1;#number of consecutive "heads" desired before ending the loop
echo "Let's randomly pick <img class=small src=http://kandipatterns.com/images/patterns/characters/12076_Classic_Tails.png> or <img class=small src=http://kandipatterns.com/images/patterns/characters/12081_Classic_Sonic_.png><br>";
echo "How many tries will it take to get $a <img class=small src=http://kandipatterns.com/images/patterns/characters/12081_Classic_Sonic_.png> in a row?<br>";
$result = tosser($a);#call the function
$count = count($result);#determines the number of attemps during of funtion by counting the number of items in the array $results
#loop prints picture for each value in result list
foreach ($result as $flip) {
  if ($flip == 1)
  {
    echo "<img class=result src=http://kandipatterns.com/images/patterns/characters/12076_Classic_Tails.png>";
  }
  elseif ($flip == 2)
  {
    echo "<img class=result src=http://kandipatterns.com/images/patterns/characters/12081_Classic_Sonic_.png>";
  }
} echo "<br><p>It took $count tosses to get $a <img class=small src=http://kandipatterns.com/images/patterns/characters/12081_Classic_Sonic_.png> in a row!</p>";
echo "</div>";

#_-_-_-_-_-_FUNCTIONS_-_-_-_-_-_-


#===consecutive coin tosser

function tosser($toss)#the numeral 1 = tails and 2 = sonic(heads)
{
  $test_array = [];#empty list for testing consecutive "sonics" tosses($toss)
  $result_array = [];#empty list to record results of every toss
  do {
    if (mt_rand(1,2) == 1)
    {
      array_push($result_array, 1);#adds every tails flip to result_array
      unset($test_array);#clears test list when ever result is 1 (aka flip is "tails")
      $test_array = [];
    }
    else
    {
      array_push($result_array, 2);#adds every "sonic" flip to result_array
      array_push($test_array, 2);#adds to test_array
    }
  } while(count($test_array) < $toss);#when length of test_array is equal to the desired consecutive tosses...STOP tossing!
  return $result_array;#returns a list of results {1,2,1,1,2....}
}

?>
</body>
</head>
