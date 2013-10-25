Strapless - A Bootstrap WordPress Theme
=========

A clean, simple, responsive WordPress theme built with Bootstrap (v3), Modernizr &amp; icons from Font Awesome. Created &amp; maintained by the creators of [WP Smackdown](http://wpsmackdown.com/).

This theme can be used as-is on any WordPress site, but it was intentionally designed to be used as a starting point for building custom themes that utilize the Bootstrap framework.

## Getting Started

* [Download](https://github.com/escapecreative/strapless/releases) the latest stable release, or try the [most up-to-date code](https://github.com/escapecreative/strapless/archive/master.zip) if you're feeling adventurous (might be buggy).
* Navigate to "Appearance" > "Themes" in your WordPress Admin
* Upload the .zip file
* Activate the theme
* Navigate to "Appearance" > "Menus". Click on "Manage Locations". Choose an existing menu, or add a new one, for the "Primary navigation at top of page" location.

## Features

The Strapless Theme includes the following features. We have also included CSS styles for popular plugins.

### Header & Navigation
* **Navbar:** Header uses Bootstrap's [Navbar](http://getbootstrap.com/components/#navbar)
	* Currently, we're using a [fixed-to-top](http://getbootstrap.com/components/#navbar-fixed-top) style. See Bootstrap's documentation on how to change this.
* **Dropdowns:** Navigation uses Bootstrap's [Dropdowns](http://getbootstrap.com/components/#dropdowns) for sub-pages. Only supports one level of dropdowns.

### Writing (Posts & Pages)
* **Single Posts:** Displays title, featured image, publish date, number of comments, categories, tags & post modified date (in human readable format)
* **HTML Elements:** CSS styles for all HTML elements, using Bootstrap's [CSS styling](http://getbootstrap.com/css/)
* **Code:** CSS styles for `<code>` and `<pre>` tags, using Bootstrap's [code styling](http://getbootstrap.com/css/#code)

### Images
* **Featured images:** Displayed on `single.php`, as well as archive pages
* **Image captions:** CSS styles for all image captions inserted via the WYSIWYG editor

### Widgets
* **Widgetized Areas:** 1 widgetized area in the sidebar. Basic CSS styles when adding multiple widgets to this area.
* **Tag clouds:** CSS styles for the default tag cloud widget

### Comments
* **Media object:** Uses Bootstrap's [media object](http://getbootstrap.com/components/#media)
* **Form CSS:** Utilizes Bootstrap's [form styling](http://getbootstrap.com/css/#forms)
* **Timestamp:** Listed in human readable format (ex: "1 hour ago")
* **Avatar:** CSS styles applied for avatars. Uses Bootstrap's `img-circle` class.
* **Permalink:** [Chain link icon](http://fortawesome.github.io/Font-Awesome/icon/link/) used for comment permalink
* **Name & URL:** Displays commenter's name & a link to their website
* **Post author:** Unique style for comments by the post author. Uses WordPress' `bypostauthor` class.
* **Threaded comments:** Support for 1 level of threaded comments
* **Jetpack > Subscriptions:** CSS styles for the checkbox that allows users to subscribe to comments

### Search
* **Results:** Number of results displayed, or "No Results" if nothing found
* **Search terms:** Search terms displayed at the top of the results page, and inserted into the `#searchform input` field for easy revising

### Archives (Category, Tag, Date, Author)
* **Media object:** Uses Bootstrap's [media object](http://getbootstrap.com/components/#media)
* **One template powers all:** The `archive.php` template powers all archive pages
* **Pagination:** Previous/Next button pagination uses Bootstrap's [pager pagination](http://getbootstrap.com/components/#pagination-pager)
* **Featured image:** Displays 120x120 featured image thumbnail (if one exists)
* **Name & descriptions:** Category & tag archive pages contain name & description (if one exists)

### Plugins
* **Jetpack > Shortcode Embeds:** CSS styles for embedded YouTube videos

## Changelog

View the [full changelog](https://github.com/escapecreative/strapless/commits/master), or view a [summary of changes for each release](https://github.com/escapecreative/strapless/releases).

## Bugs & Feature Requests

If you find a bug, let us know about it on the [Issues](https://github.com/escapecreative/strapless/issues) page. Please search existing issues before creating a new one. Same thing goes for feature requests.

We'll do our best to fix bugs as quickly as possible, but cannot make any guarantees. Our goal is to continue adding features on a regular basis, but we have yet to establish a development timeline.

## Contributing

If you'd like to contribute to the project, please send us a message, or just submit a pull request.
