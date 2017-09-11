<?php

$numero = FALSE;

if(filter_var($numero,FILTER_VALIDATE_INT)):

    print 'ESTO ES UN NUMERO';
else:
    print 'ERROR';
endif;

