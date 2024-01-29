
<?php

use function PHPSTORM_META\type;

    include 'farm.php';
    include 'tree.php';
    include 'tree_type.php';
    // create new farm
    $farm = new Farm(1,"first");
    // create new type apple
    $apple = new TreeType(1,"Apple");
    // create new type pear
    $pear = new TreeType(2,"Pear");
    // create and initialize apple trees and pear trees
    // and add trees to farm
    $apple_trees = array();
    $pear_trees = array();
    for ($x = 1; $x < 11; $x++) {
        $farm->add_tree(new Tree($x,"Apple", $apple, rand(10,100),40, 50));
    }
    for ($x = 11; $x < 26; $x++) {
        $farm->add_tree(new Tree($x,"Pear", $pear, rand(10,100), 0, 20));
    }
    // collect the fruits
    $col = $farm->collect();
    // display total amount of each fruits and the weight
    // the weight is random number for each apple and each pear
    // apple weight 150-180
    // pear weight 130-170
    foreach($col as $x => $x_value) {
        $sum = 0;
        if(strcmp($x,"'Apple'") == 0){
            for($k = 1; $k <= $x_value; $k++){
                $sum += rand(150,180);
            }
        }
        if(strcmp($x, "'Pear'") == 0){
            for($k = 1; $k <= $x_value; $k++){
                $sum += rand(130,170);
            }
        }
        echo "Type = " . $x . ", Amount = " . $x_value . " pieces, and total weight = " . $sum . " g.";
        echo "<br>";
      }
?>