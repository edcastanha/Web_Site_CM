<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZByCv3X\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZByCv3X/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZByCv3X.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZByCv3X\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZByCv3X\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZByCv3X',
    'container.build_id' => 'af18bc83',
    'container.build_time' => 1625718716,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZByCv3X');
