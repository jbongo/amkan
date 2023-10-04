<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.link_block.choice_provider.cms_page' shared service.

return $this->services['prestashop.module.link_block.choice_provider.cms_page'] = new \PrestaShop\Module\LinkList\Form\ChoiceProvider\CMSPageChoiceProvider(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'amk_', ($this->services['prestashop.module.link_block.choice_provider.cms_category'] ?? $this->load('getPrestashop_Module_LinkBlock_ChoiceProvider_CmsCategoryService.php'))->getChoices(), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguage()->id, ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getContextListShopID());
