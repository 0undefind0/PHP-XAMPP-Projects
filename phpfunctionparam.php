<?php
    function redline() {
?>

    <hr style="
    background-color:#f00;
    height:5px;"
    />

<?php
    }

    function footer(){
        echo"PHP Test Page&copy 2013";
    }

    echo"First Text";
    redline();
    echo"Second Text";
    redline();
    footer();
?>


<?php
    function hrline($height, $color) {
        ?>
            <hr
                style="
                    height:<?php echo$height;?>;
                    background-color:<?php echo$color?>"
            />
        <?php
    }

    echo"First Text";
    hrline("5px","#00f");
    echo"second Text";
    hrline("10px","#0f0");
?>


<?php
    function qoutient($x,$y){
       return $x/$y;
    }

    function remark($grade){
        if($grade >= 75) {
            return true;
        } else {
            return false;
        }
    }

    printf("The qoutient is%.2f <br/>",qoutient(7,3));
    if(remark(80)) {
       echo"passed";
    } else {
       echo"failed";
    }
?>


<?php
    function displayPerson(){
        function name(){
            echo"Juan Dela Cruz"; 
        }
    }
    displayPerson();
    name();      
?>


<?php
    $str="This is global variable";
    function f(){
        global $str;
        echo"function f() was called <br>";
        echo"$str <br>";
    }
    f();
?>


<?php
    $str = "This is global variable";
    function ff(){
       global $str;
       echo "function ff() was called <br>";
       echo "$str <br>";
    }
    ff();
?>


<?php
    function fff() {
        $str = "This is local variable";
    }
    
    fff();
    echo "Displaying local variable: ";
    echo $str;
?>


<?php
    function ffff() {
       global $str;
       $str = "This is local variable";
    }
    ffff();
    echo "Displaying local variable:";
    echo $str;
?>


<?php
    function counter($value) {
        static $count = 0;
        $count += $value;
        echo "The value of the counter is $count <br>";
    }
    counter(4);
    counter(3);
    counter(8);
    counter(6);
?>