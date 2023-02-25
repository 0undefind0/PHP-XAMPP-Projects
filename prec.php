<!-- <?php
    $price = 450;
    $discount = 12;
    $value = $price - $price * $discount / 100;
    echo "<p>$value pesos</p>";
    // is the same as
    $value = ($price - (($price * $discount)/100));
    echo "<p>$value pesos</p>";
?> -->

<!-- <?php
    $a = 600;
    $b = 30;
    $c = 5;
    $x = $a / $b * $c;
    echo "<p>$x</p>";
    //is also same as
    $x = (($a / $b) * $c); //left to right
    echo "<p>$x</p>";

    $x = $y = $z = $c;
    echo "<p>$x</p>";
    //is also same as
    ($x = ($y = ($z = $c))); // right to lefts
    echo "<p>$x</p>";
?> -->

<!-- 
<?php
    $x = 10;
    //post increment
    echo "<p>".$x++."</p>"; //10
    //pre increment
    echo "<p>".++$x."</p>"; //12

    $y = 20;
    //post decrement
    echo "<p>".$y--."</p>"; //20
    //pre decrement
    echo "<p>".--$y."</p>"; //18
?> -->

<!-- <?php
    $a = 10;
    $b = 20;
    $x = $a > $b ? "\$a is larger": "\$b is larger";
    echo $x;
?> -->

<!-- <?php
    $a = 135; $b = 45;
    $c = $a & $b;
    echo "<p>$c</p>";
    $c = $a | $b;
    echo "<p>$c</p>";
    $c = $a ^ $b;
    echo "<p>$c</p>";
    $c = ~$b;
    echo "<p>$c</p>";
    $c = $b << 2;
    echo "<p>$c</p>";
    $c = $b >> 2;
    echo "<p>$c</p>";
?> -->

<!-- <?php
    $a = 50; $b = 80;
    //if statement
    if($a < $b) {
        echo "<p>\$a is less than \$b</p>";
    }
    // if...else statement
    if($a > $b) {
        echo "<p>\$a is greater than \$b</p>";
    } else {
        echo "<p>\$a is less than or equal to \$b</p>";
    }
    //if..elseif..else
    if($a > $b) {
        echo "<p>\$a is greater than \$b</p>";
    } elseif ($a < $b) {
        echo "<p>\$a is less than \$b</p>";
    } else {
        echo "<p>\$a is equal to \$b</p>";
    }
?> -->


<!-- <?php
    $score = 86;
    if($score > 80) {
        if($score > 80) {
            echo "Your score is between 80 to 91";
        } else {
            echo "Your score is higher than 90";
        }
    } else {
        echo "Your score is loweer than 81";
    }
?> -->


<!-- <?php 
    $score = 86;
    if($score > 80 && $score < 91) {
        echo "Your score is between 80 to 91";
    } else if($score > 90) {
        echo "Your score is higher than 90";
    } else {
        echo "Your score is lower than 81";
    }
?> -->


<!-- <?php 
    $month = 2;
    switch($month) {
        case 1:
            echo "January"; break;
        case 2:
            echo "Febuary"; break;
        case 3:
            echo "March"; break;
        case 4:
            echo "and so on up to 12"; break;
        default:
            echo "Invalid"; break;
    }
?> -->


<!-- <?php
    $x = 10;
    while($x > 0) {
        echo $x--." ";
    }
    echo "<br/>";

    $y = 20;
    do {
        echo $y++." ";
    } while($y < 21);
    echo "<br/>";

    $z = 5;
    for($i = $z; $i > 0; --$i) {
        echo $i." ";
    }
?> -->


<!-- <?php
    $i = 1;
    while(true) {
        $i++;
        if($i < 20) {
            continue;
        } elseif($i >= 20 && $i < 30) {
            echo $i."<br/>";
        } else {
            break;
        }
    }
    goto display;
    echo "This statement were skipped by goto";
    display:
    echo "statement from display label";
?> -->


<?php
    $a = 10; $b = 20; $c = 30;
    if($a < $b):
        echo "<p>\$a is less than \$b</p>";
    endif;
    for($i = 1; $i < 11; $i++):
        echo $i." ";
    endfor;
?>