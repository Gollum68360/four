<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient' shared service.

return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient(($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] ?? $this->load('getFacebookEssentialsApiClientFactoryService.php')), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] ?? $this->load('getAccessTokenProviderService.php')), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] ?? $this->load('getConfigurationAdapterService.php')), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] ?? $this->load('getConfigurationHandlerService.php')), ($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] ?? $this->load('getResponseListenerService.php')));
