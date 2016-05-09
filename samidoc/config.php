<?php

$dir = __DIR__ . '/../src';

$iterator = Symfony\Component\Finder\Finder::create()
	->files()
	->name('*.php')
	->in($dir);

$options = [
	'theme'                => 'default',
	'title'                => 'testing Sami',
	'build_dir'            => __DIR__ . '/build/samitest',
	'cache_dir'            => __DIR__ . '/cache/samitest',
];

$sami = new Sami\Sami($iterator, $options);

$sami['filter'] = function() {
	return new \Sami\Parser\Filter\SymfonyFilter();
};

return $sami;