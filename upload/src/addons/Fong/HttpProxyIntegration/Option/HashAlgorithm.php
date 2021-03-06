<?php

namespace Fong\HttpProxyIntegration\Option;

use XF\Entity\Option;
use XF\Option\AbstractOption;

class HashAlgorithm extends AbstractOption
{

    /**
     * @param Option $option
     * @param array $htmlParams
     * @return string
     */
    public static function renderOption(Option $option, array $htmlParams) : string
    {
        $algorithms = [];
        foreach(hash_hmac_algos() as $algorithm) {
            $algorithms[$algorithm] = $algorithm;
        }

        return self::getSelectRow($option, $htmlParams, $algorithms);
    }

}