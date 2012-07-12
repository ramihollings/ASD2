// DOCTYPE html
// Project: 2
// Rami Hollingsworth
// Term 0612

<?php
//request data from the database
 
{
  "item1": "Samsung Galaxy Nexus",
  "item2": "iPhone",
  "item3": "iPod Touch Gen3"
}

 
//JSON format
echo "{";
echo "item1: ", json_encode($item1), "\n";
echo "item2: ", json_encode($item2), "\n";
echo "item3: ", json_encode($item3), "\n";
echo "}";
?>