# Vanguard: Normandy 1944 Live Gameserver Status Banner
![Example](https://feuersturm.github.io/examples/vanguard_banner.png)

The Vanguard Live Gameserver Status Banner highly customizable and yet still works right out of the box if you're fine with the default settings!

### INSTALLATION:
**Download [the latest version](https://github.com/FeuerSturm/vanguardserverstatus/releases/latest)**, extract it and upload the contents
to your webserver.

### USAGE:
By default the script requires the ip address and query port of the Bat1944 gameserver you want to show
a live status banner for, the format is as follows:

    url/to/serverstatus/status.php?ip=<ip address here>&port=<query port here>

Example:

    https://yourdomain.com/serverstatus/status.php?ip=193.70.15.176&port=64100

I think you get the idea!

### CUSTOMIZATION:
If you're not happy with the default settings/look, you can customize the status banner to your likings,
just edit the "**config.php**" in the "config" folder with a text editor (I'd recommend [NotePad++](https://notepad-plus-plus.org/)) and you'll find all possible options!

Here's some stuff that you can edit:
* ability to bind status banner to single gameserver so it's not needed to supply ip and port via URL
* change images for game logo, default background for unknown maps, error logo, error background
* change font used and font size for data/error messages
* enable/disable GeoIP features to display country flag according to gameserver's location, can be set manually as well
* show either game or query port in the status banner
* change font & shadow colors for all different texts
* set max length of server name before cropping it
* adjust cache time (default 60seconds, min 10sec, max 300sec)
* enable/disable gameserver IP filter to prevent others from using your hosting to display their gameservers
* change the texts for error messages and descriptions, so you can translate them to your language

I've added a lot of comments to the settings, so I hope it's easy to understand what to change, if not, just ask!


### CREDITS:

    based on PHP-Source-Query Library by xPaw - https://github.com/xPaw/
    included error & lock images by FreeIconPNG - http://www.freeiconspng.com
    included country flag icons by Mark James - http://www.famfamfam.com
    included font "SpecialElite" by Astigmatic - http://www.astigmatic.com/
    GeoIP features by ARTIA INTERNATIONAL S.R.L. - http://ip-api.com
    Vanguard: Normandy 1944 by Pathfinder Games Limited - https://www.vanguardww2.com/



