<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIox2pdb\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIox2pdb/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerIox2pdb.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerIox2pdb\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerIox2pdb\appProdProjectContainer([
    'container.build_hash' => 'Iox2pdb',
    'container.build_id' => '3f5cf5e6',
    'container.build_time' => 1670936970,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIox2pdb');