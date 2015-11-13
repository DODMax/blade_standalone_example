<?php

class Page
{
	function show($renderer)
	{
		return $renderer->render('example', []);
	}
}
