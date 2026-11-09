<?php
$rglob = function ($pattern = '*', $flags = 0, $path = '') use (&$rglob) {
    $paths = glob($path . '*', GLOB_MARK | GLOB_ONLYDIR | GLOB_NOSORT);
    $files = glob($path . $pattern, $flags);
    foreach ($paths as $path) {
        $files = array_merge($files, $rglob($pattern, $flags, $path));
    }
    return $files;
};

$loadClientScripts = function () use ($rglob) {
    $searchDir            = dirname(__FILE__) . '/clientScript/';
    $clientScriptPackages = array();

    $scripts = $rglob('*.php', 0, $searchDir);
    foreach ($scripts as $file) {
        /** @noinspection PhpIncludeInspection */
        $clientScriptPackages += require($file);
    }

    return $clientScriptPackages;
};

$packagesKey   = "Yii.ClientScript.packages";
$clientScripts = false && \Yii::app()->getCache()->get($packagesKey);
if (!$clientScripts) {
    $clientScripts = $loadClientScripts();
    //\Yii::app()->getCache()->add($packagesKey, $clientScripts, 60);
}

return $clientScripts;
