# WordPress Starter Plugin

This repo is the starter plugin for [KnowTheCode.io](https://knowthecode.io). Come check out the [Let’s Build a WordPress Starter Plugin](https://knowthecode.io/labs/lets-build-wordpress-starter-plugin) lab, where you will build this custom plugin with [Tonya](https://knowthecode.io/about) as she explains each step.

You will use this plugin to build labs with us and test constructs in the [Docx](https://KnowTheCode.io/docx).

## Features

This plugin includes the following features:

1. [Composer](https://getcomposer.org/) - Dependency Manager for PHP
2. [Kint](http://kint-php.github.io/kint/) - Awesome package that helps you to debug - forget `var_dump` and `print_r`. You are going to love Kint.
3. [Whoops](https://github.com/filp/whoops) - Oh man, you will wonder why this isn't built into PHP. When an error occurs, this displayer replaces out the PHP orange table and gives you information you can actually use.

## Installation

1. Download it.
2. Put into your `wp-content/plugins/` folder
3. Extract it
4. Go into the new folder
5. Run `composer install` in terminal or Git Bash to bring in the dependencies and install Composer locally.

Installation from GitHub is as simple as cloning the repo onto your local machine.  To clone the repo, do the following:

1. Using PhpStorm, open your project and navigate to `wp-content/plugins/`. (Or open terminal and navigate there).
2. Then type: `git clone https://github.com/KnowTheCode/WordPress-Starter-Plugin-Lab`.
3. Go into the new folder
4. Run `composer install` in terminal to bring in the dependencies and install Composer locally.

### Updating to New Kint

If you have the old version of Kint, do the following:

1. Change the dependency in your `composer.json` file to `"kint-php/kint" : "^1.0",`
2. Run `composer update` in terminal or Git Bash to update all of the dependencies to the latest versions, including Kint.

That's it. 

## Contributions

All feedback, bug reports, and pull requests are welcome.
