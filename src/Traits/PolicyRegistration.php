<?php

namespace MinionFactory\LaravelModuleExtras\Traits;

trait PolicyRegistration
{
    use ResourceRegistration;

    public function registerPolicies()
    {
        if ($this->moduleName ?? false) {
            $path = module_path($this->moduleName,'Policies');
            $this->loadExtraResources($path);
        }
    }
}
