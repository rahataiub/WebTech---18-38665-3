<?php
// Array with names
$a[] = "Mobile";
$a[] = "Laptop";
$a[] = "Desktop";
$a[] = "Refrigarator";
$a[] = "Tv";
$a[] = "Washing machine";
$a[] = "Earphone";
$a[] = "Wifi router";
$a[] = "pendrive";
$a[] = "HDD";
$a[] = "SSD";
$a[] = "Server";
$a[] = "Start tec buzet PC";
$a[] = "DSLR";
$a[] = "SLR";
$a[] = "Tv remote";
$a[] = "Tv CD setup";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Not available " : $hint;
?>