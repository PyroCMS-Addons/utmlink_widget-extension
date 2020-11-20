# PyroCMS UTM Link Generator Dashboard Widget

#### Version 1.0.0

*thrive.extension.utmlink_widget*

#### Generate UTM Links in a dashboard widget.

This PyroCMS Dashboard extension generates UTM Links within the dashboard of PyroCMS.

This will work on most 3.x installations however is only tested on 3.8 at this time.

#### Requirements

1. PyroCMS 3.8
2. PHP ^7.2 


#### Installation

1. Download to your PyroCMS installtion to a folder `/addons/default/thrive/`. This extension folder must be named `utmlink_widget-extension`.
2. Using terminal
```
composer dump-autoload
php artisan addon:install thrive.extension.utmlink_widget
```

### Configure
1. In the admin dashboard, create a new Widget.
2. Select "UTM Link Generator Widget" from the available options.
