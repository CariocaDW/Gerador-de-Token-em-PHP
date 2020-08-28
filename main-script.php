<?php

    $binaries = random_bytes(3); //Gera os bytes do token com random_bytes(quantidade de bytes)

    $token = bin2hex($binaries); //Transforma os bytes em hexadecimal
    print "<p>TOKEN: ".strtoupper($token)."</p>"; //Exibe o token na tela

?>