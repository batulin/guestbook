<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOmFxtxi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOmFxtxi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOmFxtxi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOmFxtxi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOmFxtxi\App_KernelDevDebugContainer([
    'container.build_hash' => 'OmFxtxi',
    'container.build_id' => 'd63e97d3',
    'container.build_time' => 1649241010,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOmFxtxi');
