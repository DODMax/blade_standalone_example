<?php

function asset($path)
{
	return BASE_URL . '/assets'. $path;
}

function url($uri)
{
	return  BASE_URL . '/' . $uri;
}