<?php

namespace MinionFactory\LaravelModuleExtras\Traits;

trait ShortcodeRegistration
{
    use ResourceRegistration;

    public function registerShortcodes()
    {
        if ($this->moduleName ?? false) {
            $path = module_path($this->moduleName,'Shortcodes');
            $this->loadExtraResources($path);
        }
    }
}
