<?php

    function encrypt($message, $key) {
        $key = hex2bin($key);

        $nonceSize = openssl_cipher_iv_length('aes-256-ctr');
        $nonce = openssl_random_pseudo_bytes($nonceSize);

        $cyphertext = openssl_encrypt(
            $message,
            'aes-256-ctr',
            $key,
            OPENSSL_RAW_DATA,
            $nonce
        );

        return base64_encode($nonce . $cyphertext);
    }

?>