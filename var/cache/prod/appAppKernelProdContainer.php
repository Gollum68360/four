<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT9a85SU\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT9a85SU/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerT9a85SU.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerT9a85SU\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerT9a85SU\appAppKernelProdContainer([
    'container.build_hash' => 'T9a85SU',
    'container.build_id' => 'ede0a57b',
    'container.build_time' => 1683228080,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT9a85SU');
