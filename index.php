<?php
    #função geradora de string
    
    $codigoDeVerificacao = array();
    $i = 0;
    for($i; $i<3; $i++){
        $num = random_int(1,100);
        $codigoDeVerificacao[] = $num;    
    };
    
    
    print_r ($codigoDeVerificacao);

    // echo "\n\t";
    // echo bin2hex($bytes);
       
?>
