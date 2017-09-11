<?php

$email = '5454';

if(filter_var($email,FILTER_VALIDATE_EMAIL)):

    print 'ESTO SI ES UN CORREO';
else:
    print 'ESTO NO ES UN CORREO VALIDO';
endif;

