<?php

$cadena = "PR-";
print str_pad($cadena,10,"0");
print '<hr>';
print str_pad($cadena,10,"0",STR_PAD_LEFT);
print '<hr>';
print str_pad($cadena,10,"*",STR_PAD_BOTH);

print '<hr>';
print str_pad($cadena,10,"___");
