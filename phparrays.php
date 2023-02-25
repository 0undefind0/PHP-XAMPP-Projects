<?php 
    $fruit[0]="orange";
    $fruit[1]="apple";
    $fruit[2]="grapes";
    $fruit[3]="banana";
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";
?>

<?php 
    $fruit[] = "orange";
    $fruit[] = "apple";
    $fruit[] = "grapes";
    $fruit[] = "banana";
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";
?>

<?php
    $fruit = array("orange","apple","grapes","banana");
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";
?>




<?php
    $fruit = array(
        "orange",
        "apple",
        "grapes",
        "banana");
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";
?>

<?php
    $fruit=array(
        "orange",
        "apple",
        "grapes",
        "banana");
    echo"<pre>";
    var_dump($fruit);
    echo"</pre>";
?>




<?php
    $fruit=array(
        "orange",
        "apple",
        "grapes",
        "banana",
        "dragon fruit");
    foreach($fruit as$value){
        echo"$value <br/>";
    }
?>

<?php
    $person = array(
        'First Name'=>'Juan',
        'Last Name'=>'Dela Cruz',
        'Date of Birth'=>'April3,1986',
        'Gender'=>'Male'
    );
    foreach($person as$value){
        echo"$value <br/>";
    }
    echo"<p/>";
    foreach($person as$key=>$value){
        echo"$key:$value <br/>";
    }
?>

<?php

    $person = array(     
        'Leader'=>array(     
            'First Name'=>'Juan',
            'Last Name'=>'Dela Cruz',
            'Date of Birth'=>'April3,1986',
            'Gender'=>'Male'),
        'Assistant'=>array(
            'First Name'=>'Rica',
            'Last Name'=>'San Pedro',
            'Date of Birth'=>'January8,1980',
            'Gender'=>'Female'),
        'Member'=>array(
            'First Name'=>'Jose',
            'Last Name'=>'Dela Paz',
            'Date of Birth'=>'March21985',
            'Gender'=>'Male')
    );  
    foreach($person as $pkey => $parr){
        echo"<h2>$pkey</h2>";
        foreach($parr as $key => $value){
            echo"$key:$value <br/>";
        }
    }
?>


<?php
    $fruit = array(
        "orange","apple",
        "grapes","banana",
        "guava","blue berry");

    sort($fruit);// sort array in ascending
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";

    rsort($fruit);// sort array in ascending
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";
?>


<?php
    $fruit=array(
        "orange","apple",
        "grapes","banana",
        "guava","blue berry");

    asort($fruit);
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";

    arsort($fruit);
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";
?>


<?php
    $fruit=array(
        '1010' => "orange",
        '1002' => "apple",
        '1023' => "grapes",
        '1006' => "banana",
        '1015' => "guava",
        '1009' => "blue berry"
    );

    ksort($fruit);
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";

    krsort($fruit);
    echo"<pre>";
    print_r($fruit);
    echo"</pre>";
?>