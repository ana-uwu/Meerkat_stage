<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPsVXMkF\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPsVXMkF/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerPsVXMkF.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerPsVXMkF\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerPsVXMkF\appAppKernelProdContainer([
    'container.build_hash' => 'PsVXMkF',
    'container.build_id' => '24c8b418',
    'container.build_time' => 1685984340,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPsVXMkF');