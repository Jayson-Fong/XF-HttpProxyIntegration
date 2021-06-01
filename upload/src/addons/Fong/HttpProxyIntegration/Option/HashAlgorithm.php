<?php

namespace Fong\HttpProxyIntegration\Option;

class HashAlgorithm extends \XF\Option\AbstractOption
{

    public static function renderOption(\XF\Entity\Option $option, array $htmlParams) : string
    {
        $algorithms = [];
        foreach(hash_hmac_algos() as $algorithm) {
            $algorithms[$algorithm] = $algorithm;
        }
        return self::getSelectRow($option, $htmlParams, $algorithms);
    }

}