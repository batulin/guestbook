<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5qLrinx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5qLrinx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5qLrinx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container5qLrinx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5qLrinx\App_KernelDevDebugContainer([
    'container.build_hash' => '5qLrinx',
    'container.build_id' => 'a3ea7337',
    'container.build_time' => 1649240643,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5qLrinx');
