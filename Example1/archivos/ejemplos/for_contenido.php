<?php
file_put_contents('documento.txt', '');

for ($i=0; $i < 10 ; $i++) { 
    echo file_put_contents('documento.txt', "$i \n", FILE_APPEND);
}
?>