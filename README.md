# Stringy v. 1.0.0 for Craft CMS ![Craft 2.5](https://img.shields.io/badge/craft-2.5-red.svg?style=flat-square)

**Craft/Twig wrapper for [Stringy](https://github.com/danielstjules/Stringy) – a string manipulation library with multibyte support, by [danielstjules](https://github.com/danielstjules)**

## Installation

* Download and unzip
* Move the `/stringy` folder to your `/craft/plugins` folder
* Install from the Control Panel (`/admin/settings/plugins`)

## Usage

```jinja
{{ entry.title|stringy('shuffle') }}
{{ entry.body|stringy('truncate', 50, '...') }}
{{ someVar|string('isJson') ? 'I can haz JSON!' }}
```

Please see the docs for [Stringy](https://github.com/danielstjules/Stringy) for all available methods and parameters.  

## Disclaimer, bugs, feature request, support etc.

This plugin is provided free of charge and you can do whatever you want with it. Stringy is unlikely to mess up your stuff, but just to be clear: the author is not responsible for data loss or any other problems resulting from the use of this plugin.  

Please report any bugs, feature requests or other issues [here](https://github.com/mmikkel/Stringy-Craft/issues). Note that this is a hobby project and no promises are made regarding response time, feature implementations or bug fixes.  

**Pull requests are extremely welcome**  

### Changelog

#### 1.0.0 (03.07.2016)

* Initial public release