<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCFzfEzh\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCFzfEzh/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerCFzfEzh.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerCFzfEzh\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerCFzfEzh\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'CFzfEzh',
    'container.build_id' => '71fb68d5',
    'container.build_time' => 1543576400,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerCFzfEzh');
