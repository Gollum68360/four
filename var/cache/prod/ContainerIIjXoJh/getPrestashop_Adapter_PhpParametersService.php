<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.php_parameters' shared service.

return $this->services['prestashop.adapter.php_parameters'] = new \PrestaShop\PrestaShop\Adapter\Configuration\PhpParameters((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/config/parameters.php'));