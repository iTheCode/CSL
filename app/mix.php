<?php
use MatthiasMullie\Minify;

function mix_js($paths, $manifest = '/assets/js/all.js')
{
	$minifier = new Minify\JS();
	foreach ($paths as $key => $path) {
			$minifier->add(public_path($path));
	}
	$minifiedPath = public_path($manifest);
	if( file_exists($minifiedPath) )
		unlink($minifiedPath);
	if($minifier->minify($minifiedPath))
		return $manifest;
}

function mix_css($paths, $manifest = '/assets/css/all.css')
{
	$minifier = new Minify\CSS();
	foreach ($paths as $key => $path) {
			$minifier->add(public_path($path));
	}
	$minifiedPath = public_path($manifest);
	if( file_exists($minifiedPath) )
		unlink($minifiedPath);
	if($minifier->minify($minifiedPath))
		return $manifest;
}