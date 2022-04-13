<?php
return array(
    'api_url'      => "http://api-1.onebound.cn",
    'api_urls_on'  => true,
    'api_key'      => "", // api key
    'api_secret'   => "", // api secret
    'api_version'  => '',
    'secache_path' => "",
    'secache_time' => '',
    'cache'        => !isset($_GET['del']) ? true : false, // 是否开启缓存
    'cache_local'  => '',  // 是否开启本地缓存
    'log_file'     => '',  //本地缓存文件路径
    'debug'        => !isset($_GET['debug']) ? false : $_GET['debug'],
    'lang'         => '',
    'source_data'  => true,    // 是否返回原数据
    'secache_size' => '50000',// 文件缓存大小（单位：字节）
);
?>