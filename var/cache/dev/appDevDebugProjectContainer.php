<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXkjjl3x\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXkjjl3x/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXkjjl3x.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXkjjl3x\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXkjjl3x\appDevDebugProjectContainer([
    'container.build_hash' => 'Xkjjl3x',
    'container.build_id' => '554014ec',
    'container.build_time' => 1671726029,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXkjjl3x');
