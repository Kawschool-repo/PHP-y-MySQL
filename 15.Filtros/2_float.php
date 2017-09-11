<?php

$moneda = 'MONEDA';

if(filter_var($moneda,FILTER_VALIDATE_FLOAT)):

    print 'ESTO SI ES UN VALOR MONETARIO';
else:
    print 'ERROR';
endif;

