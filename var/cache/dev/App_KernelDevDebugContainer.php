<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFN1xaTf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFN1xaTf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFN1xaTf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFN1xaTf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFN1xaTf\App_KernelDevDebugContainer([
    'container.build_hash' => 'FN1xaTf',
    'container.build_id' => '33c45cf8',
    'container.build_time' => 1694702727,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFN1xaTf');
