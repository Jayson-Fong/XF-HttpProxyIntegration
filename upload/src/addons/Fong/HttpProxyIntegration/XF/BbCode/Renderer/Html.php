<?php

namespace Fong\HttpProxyIntegration\XF\BbCode\Renderer;

class Html extends XFCP_Html
{

    protected function getRenderedImg($imageUrl, $validUrl, array $params = []) : string
    {
        $options = \XF::options();
        if (!$options->httpproxyintegration_enable) {
            return parent::getRenderedImg($imageUrl, $validUrl, $params);
        }

        $encodedUrl = urlencode($imageUrl);
        $hash = hash_hmac(
            $options->httpproxyintegration_algorithm,
            ($options->httpproxyintegration_encode ? $encodedUrl : $imageUrl),
            $options->httpproxyintegration_secret
        );

        $vars = array(
            '{token}' => $hash,
            '{url}' => $encodedUrl
        );

        $proxiedUrl = strtr($options->httpproxyintegration_server, $vars);
        return parent::getRenderedImg($proxiedUrl, $validUrl, $params);
    }

}