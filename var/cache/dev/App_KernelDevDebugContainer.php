<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1rxAUTI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1rxAUTI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1rxAUTI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1rxAUTI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1rxAUTI\App_KernelDevDebugContainer([
    'container.build_hash' => '1rxAUTI',
    'container.build_id' => 'f1dbb72e',
    'container.build_time' => 1664442381,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1rxAUTI');
