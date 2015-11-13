# Windwalker Blade Example

A really simple working example of standalone blade templating using the [Windwalker Renderer](https://github.com/ventoviro/windwalker-renderer)

## Install dependencies via Composer

```
composer update
```

## Configuration
### In config.php
Enter base url for proper URL generation:

``` php
const BASE_URL = 'http://localhost';
```

### In helpers.php
Implement any helper your template might use:

``` php
function asset($path)
{
	return BASE_URL . '/assets'. $path;
}
```

## Usage
* Put your blade files in the `views/` folder.
``` html
<h1>Welcome!</h1>
<p>
	<a href="{{ url('example') }}">Example</a>
</p> 
```

* Create a 'controller' for each page in the `pages/` folder
``` php
class Page
{
	function show($renderer)
	{
		//Render the views/welcome.blade.php file
		return $renderer->render('welcome', []);
	}
}
```

* Access your pages by controller file name
```
http://localhost			=> pages/index.php
http://localhost/example	=> pages/example.php
```
