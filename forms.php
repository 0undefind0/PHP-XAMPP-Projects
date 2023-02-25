Using GETs method
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    string: <input type="text" name="str" value="get value">
    <input type="submit" name="submit" value="submit get">
</form>
Using POST method
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    string: <input type="text" name="str" value="post value">
    <input type="submit" name="submit" value="submit post">
</form>
<?php
    echo "<br/>GET value: ";
    if(isset($_GET['submit'])){
        echo $_GET['str'];
    }
    echo "<br/>POST value: ";
    if(isset($_REQUEST['submit'])){
        echo $_REQUEST['str'];
    }
    echo "<br/>REQUEST Value: ";
    if(isset($_REQUEST['submit'])){
        echo $_REQUEST['str'];
    }
?>

<br><br><br>

SET COOKIES
<?php
    setcookie("xcookie","value of x");
    setcookie("ycookie","value of y", time()+10);
    setcookie("zcookie","value of z", time()+3600);
?>

<br> 

DISPLAY COOKIES
<?php
    echo "<pre";
    print_r($_COOKIE);
    echo "</pre>";
?>

<br>

DELETE COOKIES
<?php
    setcookie("zcookie", "value of z", time()-3600);
?>