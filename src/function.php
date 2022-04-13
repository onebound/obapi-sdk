<?php
namespace otao;
{

    function otaoConfig($key)
    {
        $config = include(__DIR__ . "/config.php");
        return isset($config[$key]) ?: '';
    }
}

?>