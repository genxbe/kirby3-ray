<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('genxbe/ray', [
    'options' => [
		'enabled' => false,
	],
	'pageMethods' => ['ray' => fn ($color = null) => X\Ray::ray($this, $color)],
    'pagesMethods' => ['ray' => fn ($color = null) => X\Ray::ray($this, $color)],
    'fieldMethods' => ['ray' => fn ($field, $color = null) => X\Ray::ray($field, $color)],
    'siteMethods' => ['ray' => fn ($color = null) => X\Ray::ray($this, $color)],
    'fileMethods' => ['ray' => fn ($color = null) => X\Ray::ray($this, $color)],
    'filesMethods' => ['ray' => fn ($color = null) => X\Ray::ray($this, $color)],
    'userMethods' => ['ray' => fn ($color = null) => X\Ray::ray($this, $color)],
    'usersMethods' => ['ray' => fn ($color = null) => X\Ray::ray($this, $color)],
    'collectionMethods' => ['ray' => fn ($color = null) => X\Ray::ray($this, $color)],
    'hooks' => [
        'system.exception' => function ($exception) {
            ray()->exception($exception);
        },
    ],
]);

if (function_exists('ray') && (!option('debug') && !option('genxbe.ray.enabled'))) {
    ray()->disable();
}
