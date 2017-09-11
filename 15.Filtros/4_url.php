<?php

$url = 'SDADA';

if(filter_var($url,FILTER_VALIDATE_URL)):

    print 'ESTO ES UNA URL VALIDA';
else:
    print 'ERROR';
endif;

