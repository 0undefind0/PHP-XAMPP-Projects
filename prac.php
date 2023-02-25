
<?php $expression = true; ?>
<?php if ($expression == true): ?>
  <h2>This will show if the expression is true.</h2>
<?php else: ?>
  <h3>Otherwise this will show.</h3>
<?php endif; ?>

<?php 
    echo gettype(NULL);
    echo '<br>';
    echo gettype([2,3,4]);
    echo '<br>';
    echo gettype('ab');
    echo '<br>';
    echo gettype(1234124.512512);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo var_dump(NULL);
    echo '<br>';
    echo var_dump([2,3,4]);
    echo '<br>';
    echo var_dump('ab');
    echo '<br>';
    echo var_dump(1234124.512512);
    echo '<br>';
    echo '<br>';
    echo '<br>';

    echo PHP_INT_MAX;
    echo '<br>';
    $bigint = 9223372036854775807;
    echo $bigint;
    if ((float)$bigint > PHP_INT_MAX) 
      echo 'YES bigint is bigger than PHP_INT_MAX';
    else
      echo 'wttfg?';

    echo '<p><i>asdm :D 12312s</i></p>';


