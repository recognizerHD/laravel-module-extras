<?php

namespace MinionFactory\LaravelModuleExtras\Traits;

trait EventRegistration
{
    use ResourceRegistration;

    public function registerEventListeners()
    {
        if ($this->moduleName ?? false) {
            $path = module_path($this->moduleName,'Events' . DIRECTORY_SEPARATOR . 'Listeners');
            $this->loadExtraResources($path);
        }
    }
}
