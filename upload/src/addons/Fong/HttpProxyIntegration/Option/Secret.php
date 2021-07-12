<?php


namespace Fong\HttpProxyIntegration\Option;


use XF\Entity\Option;
use XF\Option\AbstractOption;

class Secret extends AbstractOption
{

    /**
     * @param Option $option
     * @param array $htmlParams
     * @return string
     */
    public static function renderOption(Option $option, array $htmlParams) : string
    {
        $controlOptions = self::getControlOptions($option, $htmlParams);
        $rowOptions = self::getRowOptions($option, $htmlParams);

        return self::getTemplater()->formPasswordBoxRow($controlOptions, $rowOptions);
    }

}