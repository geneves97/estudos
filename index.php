<?php
    #função geradora de string
    
    



    // $codigoDeVerificacao = array();
    // $i = 0;
    // for($i; $i<3; $i++){
    //     $num = random_int(1,100);
    //     $codigoDeVerificacao[] = $num;    
    // };


    $str = bin2hex(random_bytes(4) );
    $arr = str_split($str);
    echo $str;
    echo "\n";
    var_dump($arr); 
    
    // print_r ($codigoDeVerificacao);

    // echo "\n\t";
    // echo bin2hex($bytes);

    

    // var_dump(bin2hex(openssl_random_pseudo_bytes(4)));

    // var_dump(md5(uniqid(mt_rand(1,10),true)) );
       
?>
