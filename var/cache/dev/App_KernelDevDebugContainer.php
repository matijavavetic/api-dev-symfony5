<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZA3dQra\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZA3dQra/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZA3dQra.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZA3dQra\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZA3dQra\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZA3dQra',
    'container.build_id' => '35b914d9',
    'container.build_time' => 1603187241,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZA3dQra');
