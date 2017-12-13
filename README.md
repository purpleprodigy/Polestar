# Polestar plugin

Polestar is a centralized WordPress Plugin for Purple Prodigy website projects.  It provides the framework for custom post types, taxonomies, shortcodes and custom metaboxes. It keeps plugins DRY, reusable and modular. For example, if a feature-specific plugin such as a Testimonial, FAQ, or Portfolio plugin is required, you configure these plugins accordingly.

## Features

This plugin includes the following features:

- Custom post type handler
- Taxonomy handler
- Label generator for taxonomies and custom post types
- MetaData module for custom meta boxes
- ConfigStore module
- Automated asset versioning for WordPress
- String function utility

## Installation

To install this plugin, you can download it by clicking on the GitHub download button or clone the repository.

1. Navigate to the `wp-content/mu-plugins` folder of your project or create the `mu-plugins` folder if it does not already exist.
2. Then type in terminal: `git clone https://github.com/purpleprodigy/Polestar.git`.
3. Add the code `include( 'polestar/bootstrap.php' );` to the bottom of `mu-loader.php` in your `wp-content/mu-plugins` folder. If you don't have this file already, add it.
4. Log in to your WordPress website.

## Continue Development

If you want to continue development, you will need to have Gulp, Node.js and npm installed on your machine. 

1. Navigate to the `wp-content/mu_plugins/polestar` folder.
2. Type `npm install` to install all of the `node_modules` for Gulp.

## Contributions

All feedback, bug reports, and pull requests are welcome.