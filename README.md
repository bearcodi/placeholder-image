# Placeholder image package

> **WARNING:** This is super uber rough and just a quick start to get me moving onward with work.
**USE AT YOUR OWN RISK!!!** But feel free to report issues and bugs :)

Simple PHP component to generate placeholder images. Can be used to generate placeholder images on file or in as a URI endpoint to create placeholders on the fly.

Example usage of generating a placeholder image:

```php
use Bearcodi\Utilities\Image\Placeholder;
$image = Placeholder::make('Sample Text', 400, 300);
```

If you want to send the response to the browser its as easy as:

```php
$image->response();
```

By default the response image will be in `png` format.

You can also save the placeholder to file by calling the `save()` method and passing the path you want to save to:

```php
$store = __DIR__;

$filename = $image->save($store);
```

By default the saved filename will be an MD5 hash of the created file with the extension added.

Alternitavely you can use the `saveAs` method to provide your own filename.

```php
$store = __DIR__;

$filename = $image->saveAs($store, 'my-custom-name-without-extension');
```

## Development roadmap
 - [ ] Tests, yep really need tests
 - [ ] Laravel package
 - [ ] Maybe environment config?
 - [ ] Caching?
 - [ ] Add option to change the image format?
 - [ ] Make these docs more succinct and helpful!!!
