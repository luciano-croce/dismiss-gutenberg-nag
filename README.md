# Dismiss Gutenberg Nag
[![Build Status](https://travis-ci.org/luciano-croce/dismiss-gutenberg-nag.svg?branch=master)](https://travis-ci.org/luciano-croce/dismiss-gutenberg-nag)

Dismiss "<strong>try Gutenberg</strong>" nag, dashboard widget, when it is activated, or if it is in mu-plugins directory.

Please note that Gutenberg Editor is the future of WordPress and this is just a plugin for all those who need this feature.

* <strong>To date</strong>, try Gutenberg nag, preliminarily introduced in WP [4.9-beta3](https://wordpress.org/news/2017/10/wordpress-4-9-beta-3/), in WP [4.9.5-beta1-42869](https://core.trac.wordpress.org/changeset/42869/), and wp [4.9.8-beta1-43502](https://core.trac.wordpress.org/changeset/43502/) was already respectively removed in WP 4.9-beta4, in WP 4.9-RC1, in WP 4.9-RC2, in WP 4.9-RC3, in WP 4.9.0, in WP 4.9.1, in WP 4.9.2, in WP 4.9.3, in WP 4.9.4, in WP [4.9.5-beta1-42883](https://core.trac.wordpress.org/changeset/42883/), in WP 4.9.5, in WP 4.9.6, in WP 4.9.7, and in WP 5.0-alpha, <strong>is embedded in core of WP 4.9.8</strong> (2018-08-02) third quarter 2018 (The NeverEnding Story) according with this related [ticket](https://core.trac.wordpress.org/ticket/41316).

This plugin use Semantic Versioning number MAJOR.MINOR.PATCH - More details are available here: [Semver](https://semver.org/)

### Conditionally dismiss "try Gutenberg" callout

By default "try Gutenberg" callout is dismissed for all users type!

Once activated adds new options to the Settings -> Writing screen:
- Dismiss for all users.
- Dismiss for all users that not edit posts (edit_posts capability).
- Dismiss for all users specified (only for checked users).

> GDPR-compliant: does not collect and store any user data.

> Super light and fast plugin, easy on server resources!

### How Work?

By default try Gutenberg is displayed only for users with administrator capability in WordPress 4.9.8 but when the Gutenberg plugin is installed and activated, is displayed for all user capability type.

An option configuration page is added to the settings -> writing menu so that you can set the callout display according to your needs. <strong>This is the most complete plugin for configuring and removing the try Gutenberg callout.</strong>

For now is not necessary also remove completely Gutenberg because it is not embedded on core of WordPress 4.9.8 but is only availabe as plugin. Ownever I’m working on future features of new configuration option settings to add this possibility.

![Screenshot](https://ps.w.org/dismiss-gutenberg-nag/assets/screenshot-3.jpg?rev=1921298)

### Tips

* A neat trick, is to put this single file <strong>dismiss-gutenberg-nag.php</strong> (not its parent directory) in the <strong>/wp-content/mu-plugins/</strong> directory (create it if not exists) so you won’t even have to enable it, and will be loaded by default, also, since first step installation of WordPress setup!

* Also, for translation functionality, put all files of the single languages, <strong>dismiss-gutenberg-nag-en_US.mo</strong> for example, that you need (not its parent directory) in the <strong>/wp-content/mu-plugins/</strong> directory (create it if not exists) and will be loaded by default, they also, since first step installation of WordPress setup!

### Explanation

* This, is <strong>different from the other similar plugins</strong>, because <strong>uses the filter hook, and not the action hook</strong>. Filters should filter information, thus receiving information/data, applying the filter and returning information/data, and then used. However, filters are still action hooks. WordPress defines add_filter/remove_filter as "hooks a function to a specific filter action", and add_action/remove_action as "hooks a function on to a specific action".

### Translation

Translated by: [Luciano Croce](https://profiles.wordpress.org/luciano-croce/).

Available in American, Australian, Belgian FR, Brazilian, Canadian EN, Canadian FR, Catalan, Chilean, Colombian, English, French, German, Italian, New Zealander, Peruvian, Portuguese, Spanish, Swiss DE, Venezuelan and more other languages in becoming.

All readable text of this plugin are code free, no HTML tags was inserted (showed) on text domain strings of GlotPress.

### Acknowledgements

- Thanks to Andrea Gandino for preliminary Italian translation approval, before I became italian PTE of my plugins.
- Thanks to Garrett Hyder for English (Canada) translation approval, and code contributions.
- Thanks to Pascal Birchler for code contributions.
