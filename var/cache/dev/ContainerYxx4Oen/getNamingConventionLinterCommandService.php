<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Command\NamingConventionLinterCommand' shared service.

return $this->services['PrestaShopBundle\\Command\\NamingConventionLinterCommand'] = new \PrestaShopBundle\Command\NamingConventionLinterCommand(($this->privates['prestashop.bundle.routing.linter.admin_route_provider'] ?? $this->load('getPrestashop_Bundle_Routing_Linter_AdminRouteProviderService.php')), new \PrestaShopBundle\Routing\Linter\NamingConventionLinter());
