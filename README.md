[![Banner of Sylius Admin Better Login plugin](docs/images/banner.jpg)](https://monsieurbiz.com/agence-web-experte-sylius)

<h1 align="center">Admin Better Login</h1>

[![Admin Better Login Plugin license](https://img.shields.io/github/license/monsieurbiz/SyliusAdminBetterLoginPlugin)](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/blob/master/LICENSE.txt) [![Tests](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/actions/workflows/tests.yaml/badge.svg)](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/actions/workflows/tests.yaml) [![Security](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/actions/workflows/security.yaml/badge.svg)](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/actions/workflows/security.yaml) [![Flex Recipe](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/actions/workflows/recipe.yaml/badge.svg)](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/actions/workflows/recipe.yaml)

This plugin changes the way you log to your admin panel by adding a beautiful background
and focusing on the username (or password) field.

The backgrounds are from [Unsplash](https://unsplash.com/).  
Thank you to all the authors.

![](screenshot.png)

## Installation

```bash
composer require monsieurbiz/sylius-admin-better-login-plugin
```

Then you have to declare it in your `config/bundles.php`:

```php
<?php
return [
    // …
    MonsieurBiz\SyliusAdminBetterLoginPlugin\MonsieurBizSyliusAdminBetterLoginPlugin::class => ['all' => true],
];
```

You can copy the template of the login page as well, it's optional.  
But we strongly suggest it, otherwise you won't be able to really enjoy the background 🙃.

```bash
mkdir -p templates/bundles/
cp -Rv vendor/monsieurbiz/sylius-admin-better-login-plugin/src/Resources/views/SyliusUiBundle templates/bundles/
```

## How it works

When you load the login page we make a HTTP request to get a random image on Unsplash.  
We keep the random image's URL in your local storage for the rest of the day.

If you don't like the image, there is a small button `⟲` in the left footer of the page. 

## Change the theme of the images

You can do that!
Simply change the default tags (`nature` and `water`) with your owns in your project configuration:

```
monsieurbiz_sylius_admin_better_login:
    tags: ['paris by night']
```

![](screenshot_paris.png)

## Testing

See [TESTING.md](TESTING.md).

## Contributing

You can open an issue or a Pull Request if you want! 😘  
Thank you!
