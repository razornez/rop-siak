<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomUrlRule
 *
 * @author w7600
 */
class CustomUrlRule extends CBaseUrlRule {

    var $skey = "KEYUNICA123456"; // you can change it

    public function createUrl($manager, $route, $params, $ampersand) {
        $paramString = array();
        $cosas = '';
        foreach ($params as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $key2 => $value2) {
                    if ($value2 != NULL) {
                        $paramString[] = $key2;
                        $paramString[] = $value2;
                    }
                }
            } else {
                if ($value != NULL) {
                    $paramString[] = $key;
                    $paramString[] = $value;
                }
            }
        }
        $urlString = implode(",", $paramString);
        $paramStringEncoded = $urlString ? $this->encode($urlString) : '';
        return $route . '/' . $paramStringEncoded;
    }

    public function parseUrl($manager, $request, $pathInfo, $rawPathInfo) {
        $pathParams = explode("/", $pathInfo);
        if (isset($pathParams[2])) {
            $paramStringDecoded = $this->decode($pathParams[2]);
            $params = explode(",", $paramStringDecoded);
            for ($i = 0; $i < count($params); $i+= 2) {
                if (count($params) > ($i + 1)) {
                    $_GET[$params[$i]] = $params[$i + 1];
                    $_REQUEST[$params[$i]] = $params[$i + 1];
                } else {
                    $_GET[$params[$i]] = $params[$i];
                    $_REQUEST[$params[$i]] = $params[$i];
                }
            }
        }
        return $pathInfo;
    }

    public function safe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+', '/', '='), array('-', '_', ''), $data);
        return $data;
    }

    public function safe_b64decode($string) {
        $data = str_replace(array('-', '_'), array('+', '/'), $string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

    public function encode($value) {
//        if (!$value) {
//            return false;
//        }
//        $text = $value;
//        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
//        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
//        $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->skey, $text, MCRYPT_MODE_ECB, $iv);
//        return trim($this->safe_b64encode($crypttext));
        return $this->mencrypt($value);
    }

    public function decode($value) {
//        if (!$value) {
//            return false;
//        }
//        $crypttext = $this->safe_b64decode($value);
//        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
//        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
//        $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->skey, $crypttext, MCRYPT_MODE_ECB, $iv);
//        return trim($decrypttext);
        return $this->mdecrypt($value);
    }

    function mencrypt($input) {
        $key = substr(md5($this->skey), 0, 24);
        $td = mcrypt_module_open('tripledes', '', 'ecb', '');
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        mcrypt_generic_init($td, $key, $iv);
        $encrypted_data = mcrypt_generic($td, $input);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return trim(chop($this->url_base64_encode($encrypted_data)));
    }

    function mdecrypt($input) {
        $input = trim(chop($this->url_base64_decode($input)));
        $td = mcrypt_module_open('tripledes', '', 'ecb', '');
        $key = substr(md5($this->skey), 0, 24);
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        mcrypt_generic_init($td, $key, $iv);
        $decrypted_data = mdecrypt_generic($td, $input);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return trim(chop($decrypted_data));
    }

    function url_base64_encode($str) {
        return strtr(base64_encode($str), array(
            '+' => '.',
            '=' => '-',
            '/' => '~'
                )
        );
    }

    function url_base64_decode($str) {
        return base64_decode(strtr($str, array(
            '.' => '+',
            '-' => '=',
            '~' => '/'
                        )
        ));
    }

}

?>
