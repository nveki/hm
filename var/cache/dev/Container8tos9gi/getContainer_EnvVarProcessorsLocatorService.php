<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'container.env_var_processors_locator' shared service.

return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['const' => function () {
    return ${($_ = isset($this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor']) ? $this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] : ($this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor())) && false ?: '_'};
}]);
