<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOwqkckz\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOwqkckz/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerOwqkckz.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerOwqkckz\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerOwqkckz\appProdProjectContainer([
    'container.build_hash' => 'Owqkckz',
    'container.build_id' => '624b0d6c',
    'container.build_time' => 1552308277,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOwqkckz');
