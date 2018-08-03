# Dismiss Gutenberg Nag
[![Build Status](https://travis-ci.org/luciano-croce/dismiss-gutenberg-nag.svg?branch=master)](https://travis-ci.org/luciano-croce/dismiss-gutenberg-nag)

Conditionally dismiss "try Gutenberg" callout.

By default "try Gutenberg" callout is dismissed for all users type!

Once activated adds new options to the Settings -> Writing screen:
- Dismiss for all users.
- Dismiss for all users that not edit posts (edit_posts capability).
- Dismiss for all users specified (only for checked users).

Dismiss "<strong>try Gutenberg</strong>" nag, dashboard widget, when is activated, or automatically, if it is in mu-plugins directory.
* <strong>Tips</strong>: a neat trick, is to put this single file <strong>dismiss-gutenberg-nag.php</strong> (not its parent directory) in the <strong>/wp-content/mu-plugins/</strong> directory (create it if not exists) so you won’t even have to enable it, and will be loaded by default, also, since first step installation of WordPress setup!
* <strong>To date</strong>, try Gutenberg nag, preliminarily introduced in WP [4.9-beta3](https://wordpress.org/news/2017/10/wordpress-4-9-beta-3/), in WP [4.9.5-beta1-42869](https://core.trac.wordpress.org/changeset/42869/), and wp [4.9.8-beta1-43502](https://core.trac.wordpress.org/changeset/43502/) was already respectively removed in WP 4.9-beta4, in WP 4.9-RC1, in WP 4.9-RC2, in WP 4.9-RC3, in WP 4.9.0, in WP 4.9.1, in WP 4.9.2, in WP 4.9.3, in WP 4.9.4, in WP [4.9.5-beta1-42883](https://core.trac.wordpress.org/changeset/42883/), in WP 4.9.5, in WP 4.9.6, in WP 4.9.7, and in WP 5.0-alpha, but <strong>is expected to land in core when WP 4.9.8 is released</strong> (2018-08-02) in third quarter 2018 (The NeverEnding Story) according with this related [ticket](https://core.trac.wordpress.org/ticket/41316).
* <strong>Explanation</strong>: this, is <strong>different from the other similar plugins</strong>, because <strong>uses the filter hook, and not the action hook</strong>. Filters should filter information, thus receiving information/data, applying the filter and returning information/data, and then used. However, filters are still action hooks. WordPress defines add_filter/remove_filter as "hooks a function to a specific filter action", and add_action/remove_action as "hooks a function on to a specific action".

For now is not necessary also remove completely Gutenberg because it is not embedded on core of WordPress 4.9.8 but is only availabe as plugin. Ownever I'm working on future features of new "Option Settings Configuration Page" to add this possibility.
