<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerErban3c\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerErban3c/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerErban3c.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerErban3c\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerErban3c\appDevDebugProjectContainer([
    'container.build_hash' => 'Erban3c',
    'container.build_id' => 'bec59c08',
    'container.build_time' => 1553766564,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerErban3c');