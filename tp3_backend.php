<?php

for ($i=1; $i < 101; $i++) { 
    echo "<p> $i </p> \n";
}

?>
<hr>
<?php

for ($i=100; $i > 0; $i--) { 
    echo "<p> $i </p> \n";
}

?>
<hr>
<?php

for ($i=2; $i <= 100; $i= $i + 2) { 
    echo "<p> $i </p> \n";
}

?>
<hr>
<?php

for ($i=1; $i < 100; $i= $i + 2) { 
    echo "<p> $i </p> \n";
}

?>
<hr>
<?php


$numero = 0;

for ($i=1; $i <= 20; $i++) {
    $numero += $i; 


}
echo "<p> $numero </p>\n";

?>
<hr>
<?php


$numero = 0;

for ($i=2; $i <= 20; $i = $i + 2) {
    $numero += $i; 


}
echo "<p> $numero </p>\n";

?>