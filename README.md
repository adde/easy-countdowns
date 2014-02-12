Easy Countdowns WordPress plugin
================================
Adds support of shortcodes that displays countdowns in number of days to a specified date.


Installation
------------
Download as zip. Unzip folder into `site/wp-content/plugins`. Activate in WordPress admin.


Usage
-----
The following shortcode will render the number of days until "2014-06-01": `[countdown date="2014-06-01"]`.

By default shortcodes can be used in post and pages. To activate shortcodes in text widgets paste the following into your `functions.php` file: `add_filter('widget_text', 'do_shortcode');`.


License
-------
This software is free and carries a WTFPL license.


Changelog
---------
v1.1 (2014-02-12)
* Rounding days with ceil instead of floor to avoid 0 days on last day.

v1.0 (2014-02-08)
* First release.