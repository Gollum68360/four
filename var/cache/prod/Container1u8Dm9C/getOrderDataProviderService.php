<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Provider\OrderDataProvider' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider(($this->services['ps_eventbus.context'] ?? $this->load('getPsEventbus_ContextService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] ?? $this->load('getOrderRepositoryService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] ?? $this->load('getOrderDetailsRepositoryService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] ?? $this->load('getOrderHistoryRepositoryService.php')), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] ?? $this->load('getOrderCartRuleRepositoryService.php')));
