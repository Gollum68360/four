<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.command_handler.update_order_shipping_details_handler' shared service.

return $this->services['prestashop.adapter.order.command_handler.update_order_shipping_details_handler'] = new \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\UpdateOrderShippingDetailsHandler(($this->services['prestashop.adapter.order.amount.updater'] ?? $this->load('getPrestashop_Adapter_Order_Amount_UpdaterService.php')), ($this->services['prestashop.adapter.context_state_manager'] ?? $this->load('getPrestashop_Adapter_ContextStateManagerService.php')));
