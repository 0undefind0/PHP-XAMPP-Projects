<!-- <html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
    </head>
    <body>
    <?php // include("some file.inc")?>
        <h4>Content</h4>
        The quick brown fox jumps over the lazy dog near the bank of the rivers
    </body>
</html>



<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
    </head>
    <body>
        <?php // require("some file.inc")?>
        <h4>Content</h4>
        The quick brown fox jumps over the lazy dog near the bank of the rivers
    </body>
</html> -->




<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
    </head>
    <body>
        <?php include("header.inc")?>
        <h4>Content</h4>
        The quick brown fox jumps over the lazy dog near the bank of the rivers
    </body>
</html>

<br>
<br>

<?php
    for($i=0;$i<5;$i++){
        $xgen[] = rand();
    }

    echo "xvalues: ";
    foreach($xgen as $num){
        echo $num."";
    }
    echo "<br />";
    echo "min:".min($xgen)." max: ".max($xgen);
    echo "<br />";
    for($i=0;$i<5;$i++){
        $ygen[] = rand(5,10);
    }
    echo "y values: ";
    foreach($ygen as $num){
        echo $num."";
    }
    echo "<br />";
    echo "min: ".min($ygen)." max: ".max($ygen);
    echo "<br />";
    echo "ceil(3.01): ".ceil(3.01)."<br/>";
    echo "floor(3.91): ".floor(3.91)."<br/>";
?>

<br/>
<br/>

<?php
    $price = 217795.75;
    echo number_format($price)."<br>";
    echo number_format($price,2,'.','')."<br>";
    echo number_format($price,2,'.',',')."<br>";
?>

<br/>
<br/>

<?php
    $fruitArr = array('orange','apple','grapes','mango','banana');
    foreach($fruitArr as $fruit) {
        echo $fruit." ";
    }

    $fruitStr = implode(",", $fruitArr);
    echo "<p/>Fruit string(implode): $fruitStr";

    unset($fruitArr);
    echo "<p/>Fruit list (unset)<pre>"; print_r($fruitArr); echo "</pre>";

    $fruitArr = explode(",", $fruitStr);
    foreach($fruitArr as $fruit) echo $fruit." ";
?>

<br/>
<br/>

<?php
    $str = "The quick brown fox jumps over the lazy dog";
    printf("Length of string:%s<br/>", strlen($str));
    printf("fox string is at position:%d<br/>", strpos($str,'fox'));
    printf("String reverse:%s<br/>", strrev($str));
    $abcStr = "AbcdefghijkL";
    printf("String in lowercase:%s<br/>", strtolower($abcStr));
    printf("String in uppercase:%s<br/>", strtoupper($abcStr));
    printf("Sub String\"fox jumps\": %s <br/>", substr($str,16,9));                     
?>

<br/>
<br/>

<?php
    $str="the quick bron fox jumps ...";
    echo ucfirst($str)."<br/>";
    echo ucwords($str)."<br/>";
    $str="   sample string   ";
    echo"<pre>"; var_dump($str); echo"</pre>";
    $str = ltrim($str);
    echo"<pre>"; var_dump($str); echo"<pre>"; 
    $str = rtrim($str);
    echo"<pre>"; var_dump($str); echo"</pre>"; 
    $str="  sample string   ";
    echo"<pre>"; var_dump($str); echo"</pre>";
    $str = trim($str);
    echo "<pre>"; var_dump($str); echo"</pre>";
    $str="<p>paragraph</p><hr/><a href='#'>link</a>";
    $strA = strip_tags($str);
    echo"<pre>"; var_dump($strA); echo"</pre>";
    $strB = strip_tags($str,'<a><p>');
    echo $strB;
?>
     
<br/>
<br/>

<?php
    $str = "the quick bron fox jumps ...";
    echo ucfirst($str)."<br/>";
    echo ucwords($str)."<br/>";
    $str = "sample string";
    echo"<pre>";var_dump($str);echo"</pre>";
    $str=ltrim($str);
    echo"<pre>";var_dump($str);echo"</pre>";
    $str=rtrim($str);
    echo"<pre>";var_dump($str);echo"</pre>";
    $str="sample string";
    echo"<pre>";var_dump($str);echo"</pre>";
    $str=trim($str);
    echo"<pre>";var_dump($str);echo"</pre>";
    $str="<p>paragraph</p><hr/><a href='#'> link </a>";
    $strA=strip_tags($str);
    echo"<pre>";var_dump($strA);echo"</pre>";
    $strB=strip_tags($str,'<a><p>');
    echo$strB;
?>

<br/>
<br/>

<?php
    echo date("l");
    echo"<br/>";
    echo date('l jS \of F Y h:i:s A');
?>

<br/>
<br/>

<?php
    echo time()."<br>";
    echo mktime(22)."<br>";
    echo strtotime(date("l"))."<br>";
?>