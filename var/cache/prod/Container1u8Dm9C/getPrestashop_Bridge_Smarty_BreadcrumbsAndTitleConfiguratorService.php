<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bridge.smarty.breadcrumbs_and_title_configurator' shared service.

return $this->services['prestashop.bridge.smarty.breadcrumbs_and_title_configurator'] = new \PrestaShopBundle\Bridge\Smarty\BreadcrumbsAndTitleConfigurator(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
