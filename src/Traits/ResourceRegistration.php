<?php

namespace MinionFactory\LaravelModuleExtras\Traits;

trait ResourceRegistration
{
    public function loadExtraResources($path)
    {
        $path  .= DIRECTORY_SEPARATOR;
        $files = scandir($path);

        foreach ($files as $file) {
            if (is_dir($path . $file)) {
                continue;
            }
            if ($file !== '.' && $file !== '..' && strpos($file, '-disabled') === false) {
                include_once $path . $file;
            }
        }
    }
}
