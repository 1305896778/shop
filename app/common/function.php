<?php
function encode($content,$encryptData,$privatekey){
    openssl_private_encrypt($content,$encryptData,$privatekey);
    $content = base64_encode($encryptData);
    return $content;
}

function decode($content,$go,$publickey){
    $content = base64_decode($content);
    openssl_public_decrypt($content,$go,$publickey);

    return $go;
}
?>