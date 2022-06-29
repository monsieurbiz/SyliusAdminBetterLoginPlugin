<p align="center">
    <a href="https://monsieurbiz.com" target="_blank">
        <img src="https://monsieurbiz.com/logo.png" width="250px" alt="Monsieur Biz logo" />
    </a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="https://monsieurbiz.com/agence-web-experte-sylius" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" width="200px" alt="Sylius logo" />
    </a>
    <br/>
    <img src="https://monsieurbiz.com/assets/images/sylius_badge_extension-artisan.png" width="100" alt="Monsieur Biz is a Sylius Extension Artisan partner">
</p>

<h1 align="center">Admin Better Login</h1>

[![Anti Admin Better Login license](https://img.shields.io/github/license/monsieurbiz/SyliusAdminBetterLoginPlugin?public)](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/blob/master/LICENSE.txt)
[![Tests Status](https://img.shields.io/github/workflow/status/monsieurbiz/SyliusAdminBetterLoginPlugin/Tests?logo=github)](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/actions?query=workflow%3ATests)
[![Security Status](https://img.shields.io/github/workflow/status/monsieurbiz/SyliusAdminBetterLoginPlugin/Security?label=security&logo=github)](https://github.com/monsieurbiz/SyliusAdminBetterLoginPlugin/actions?query=workflow%3ASecurity)


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
