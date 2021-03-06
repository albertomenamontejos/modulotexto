<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.order_preferences.data_provider' shared service.

return $this->services['prestashop.admin.order_preferences.data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences\OrderPreferencesFormDataProvider(${($_ = isset($this->services['prestashop.adapter.order_general.configuration']) ? $this->services['prestashop.adapter.order_general.configuration'] : $this->load('getPrestashop_Adapter_OrderGeneral_ConfigurationService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.order_gift.configuration']) ? $this->services['prestashop.adapter.order_gift.configuration'] : $this->load('getPrestashop_Adapter_OrderGift_ConfigurationService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.cms']) ? $this->services['prestashop.adapter.data_provider.cms'] : ($this->services['prestashop.adapter.data_provider.cms'] = new \PrestaShop\PrestaShop\Adapter\CMS\CMSDataProvider())) && false ?: '_'});
