<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.grid.search.factory.search_criteria_with_category_parent_id' shared service.

$a = ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()));

return $this->services['prestashop.adapter.grid.search.factory.search_criteria_with_category_parent_id'] = new \PrestaShop\PrestaShop\Adapter\Grid\Search\Factory\SearchCriteriaWithCategoryParentIdFilterFactory(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), $a, ($this->services['prestashop.adapter.feature.multistore'] ?? $this->load('getPrestashop_Adapter_Feature_MultistoreService.php')), $a, ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext()->shop->id_category, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
