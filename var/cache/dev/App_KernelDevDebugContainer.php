<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXVyMlxY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXVyMlxY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXVyMlxY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXVyMlxY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXVyMlxY\App_KernelDevDebugContainer([
    'container.build_hash' => 'XVyMlxY',
    'container.build_id' => '8adb3261',
    'container.build_time' => 1649669343,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXVyMlxY');