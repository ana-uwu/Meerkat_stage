<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.mail_template.twig_renderer' shared service.

$this->services['prestashop.adapter.mail_template.twig_renderer'] = $instance = new \PrestaShop\PrestaShop\Adapter\MailTemplate\MailTemplateTwigRenderer(($this->services['twig'] ?? $this->load('getTwigService.php')), ($this->services['prestashop.core.mail_template.variables_builder'] ?? $this->load('getPrestashop_Core_MailTemplate_VariablesBuilderService.php')), ($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()));

$instance->addTransformation(($this->services['prestashop.core.mail_template.transformation.css_inline'] ?? ($this->services['prestashop.core.mail_template.transformation.css_inline'] = new \PrestaShop\PrestaShop\Core\MailTemplate\Transformation\CSSInlineTransformation())));
$instance->addTransformation(($this->services['prestashop.core.mail_template.transformation.html_textify'] ?? ($this->services['prestashop.core.mail_template.transformation.html_textify'] = new \PrestaShop\PrestaShop\Core\MailTemplate\Transformation\HTMLToTextTransformation())));

return $instance;
