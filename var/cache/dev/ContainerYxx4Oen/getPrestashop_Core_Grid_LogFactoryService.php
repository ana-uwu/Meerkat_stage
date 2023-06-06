<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.log_factory' shared service.

return $this->services['prestashop.core.grid.log_factory'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.core.grid.definition.factory.logs'] ?? $this->load('getPrestashop_Core_Grid_Definition_Factory_LogsService.php')), ($this->services['prestashop.core.grid.data.factory.log_decorator'] ?? $this->load('getPrestashop_Core_Grid_Data_Factory_LogDecoratorService.php')), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()));
