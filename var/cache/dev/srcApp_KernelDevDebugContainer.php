<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAC0BS53\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAC0BS53/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAC0BS53.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAC0BS53\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerAC0BS53\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'AC0BS53',
    'container.build_id' => '9a7f1484',
    'container.build_time' => 1565164782,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAC0BS53');
