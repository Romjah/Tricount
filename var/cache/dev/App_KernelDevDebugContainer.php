<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0iOgoX6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0iOgoX6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0iOgoX6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0iOgoX6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0iOgoX6\App_KernelDevDebugContainer([
    'container.build_hash' => '0iOgoX6',
    'container.build_id' => 'ce27c830',
    'container.build_time' => 1694632359,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0iOgoX6');
