<?php
    $file = "test.txt"; 
    outputFileTestInfo($file); 
    function outputFileTestInfo($f) {
        if (!file_exists($f)) { 
        echo "<p>$f does not exist</p>"; 
        return; 
        } 
        echo "<p>$f is ".(is_file($f)?"":"not ")."a file</p>";
        echo "<p>$f is ".(is_dir($f)?"":"not ")."a directory</p>"; 
        echo "<p>$f is ".(is_readable($f)?"":"not ")."readable</p>"; 
        echo "<p>$f is ".(is_writable($f)?"":"not ")."writable</p>"; 
        echo "<p>$f is ".(is_executable($f)?"":"not ")."executable</p>";
        echo "<p>$f is ".(filesize($f))." bytes</p>"; 
    }
?>