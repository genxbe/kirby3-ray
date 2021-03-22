<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('genxbe/ray', [
    'options' => [
		'enabled' => false,
	],
	'pageMethods' => [
		'ray' => function ($color = null) {
            return X\Ray::ray($this, $color);
		},
	],
    'pagesMethods' => [
		'ray' => function ($color = null) {
            return X\Ray::ray($this, $color);
		},
	],
    'fieldMethods' => [
		'ray' => function ($field, $color = null) {
            return X\Ray::ray($field, $color);
		},
	],
    'siteMethods' => [
		'ray' => function ($color = null) {
            return X\Ray::ray($this, $color);
		},
	],
    'fileMethods' => [
		'ray' => function ($color = null) {
            return X\Ray::ray($this, $color);
		},
	],
    'filesMethods' => [
		'ray' => function ($color = null) {
            return X\Ray::ray($this, $color);
		},
	],
    'userMethods' => [
		'ray' => function ($color = null) {
            return X\Ray::ray($this, $color);
		},
	],
    'usersMethods' => [
		'ray' => function ($color = null) {
            return X\Ray::ray($this, $color);
		},
	],
    'collectionMethods' => [
		'ray' => function ($color = null) {
            return X\Ray::ray($this, $color);
		},
	],
]);
