<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.query_builder.product_combination' shared service.

return $this->services['prestashop.core.grid.query_builder.product_combination'] = new \PrestaShop\PrestaShop\Core\Grid\Query\ProductCombinationQueryBuilder(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'amk_', ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] ?? ($this->services['prestashop.core.query.doctrine_search_criteria_applicator'] = new \PrestaShop\PrestaShop\Core\Grid\Query\DoctrineSearchCriteriaApplicator())));
