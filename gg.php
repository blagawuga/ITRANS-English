<?php

use Sanskrit\Sanscript;

$sanscript = new Sanscript();
$output = $sanscript->t('ga##Na##pa##te', 'hk', 'devanagari'); // गNaपte
echo $output;
?>
