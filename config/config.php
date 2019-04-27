<?php
//////////////////////////////////////////////////////////////////////////////////////////////////
//
// GENERAL SETTINGS
// ================
//
// Bind to single gameserver?
// If you only have one gameserver, you can bind the status banner to
// it exclusively so you don't have to add its IP and port to the URL!
// i.e.: "123.456.789.123:7780" or "domain.com:7780" would be valid entries.
// Leave empty to require IP/port input!
$bind_gameserver = "";
// Game logo to use
// (has to be 80x80px PNG in "resources" folder!):
$game_logo = "default_logo.png";
// Default background image for unknown maps
// (has to be 464x96px PNG in "resources" folder!):
$default_bg = "default_bg.png";
// Always use default background image instead of preview picture of the
// currently running map?
// false = use map pictures | true = always use default background image
$default_bg_only = false;
// Logo to use for errors
// (has to be 80x80px PNG in "resources" folder!):
$error_logo = "error_logo.png";
// Background image for errors
// (has to be 464x96px PNG in "resources" folder!):
$error_bg = "error_bg.png";
// Lock image for displaying password protection
// (has to be 20x24px PNG in "resources" folder!):
$lock_icon = "lock.png";
// Font to use
// (has to be TrueType-Font in "resources" folder!):
$font_ttf = "SpecialElite.ttf";
// Font size for server information:
$font_size = 10;
// Font size to use for error messages:
$error_fontsize = 20;
// Darken map image where server data is displayed?
// true = darken background | false = keep map image like it is
$darken_databg = true;
// Show country flag corresponding to server's location?
// false = don't show country flag | true = show country flag
$countryflag_show = true;
// Override country flag?
// Instead of automatic detection you can set the desired flag manually using the
// ISO 3166-1 alpha-2 country code (i.e.: de = Germany, us = United States of America etc.)
// additionally you can use "eu" for the European Union flag!
// See "resources/flags" folder for available flags.
// Only works if $countryflag_show is set to true! Leave empty for automatic country detection!
$countryflag_set = "";
// Show the query port instead of the connection port?
// false = show connection port | true = show query port
$show_queryport = false;
// Max length of server name before cropping it and adding "..." to the name
$servername_maxchars = 35;
// Cache time in seconds to save some resources:
// Minimum is 10 seconds, maximum is 300 seconds!
$cache_time = 60;
// Filter IP addresses?
// false = don't filter IPs | true = only allow specified IPs
$ips_filter = false;
// Array of allowed IPs if $ips_filter is set to true:
$ips_allowed = array("31.186.250.10", "199.60.101.90");
//
// LANGUAGE SETTINGS
// =================
//
// Translation for "Server"
$desc_server = "Server";
// Translation for "IP/Port"
$desc_ipport = "IP/Port";
// Translation for "Map"
$desc_map = "Map";
// Translation for "Players"
$desc_players = "Players";
// Error message to display when IP and/or port
// is not specified:
$error_ipport = "IP and/or port missing!";
// Error message to display when IP address filter is enabled and an IP is used that is
// not white listed:
$error_ipfilter = "IP address denied!";
// Error message to display when the gameserver that is being queried is not a
// Days of War gameserver:
$error_unsupported = "Unsupported Game!";
// Error message to diplay when the Days of War gameserver is offline or the query
// in general failed:
$error_offline = "Gameserver OFFLINE!";
//
// COLOR SETTINGS
// ==============
//
// All colors have to be specified in RGB format,
// that means the first value is the Red part of the final color,
// second value is Green and third value is Blue.
// If you want to use white, use value 255 for R,G and B!
// For black use value 0 for R, G and B!
//
// Text color for descriptions
$desc_textcolor = array(255, 255, 255);
// Shadow color for descriptions
$desc_shadowcolor = array(0, 0, 0);
// Text color for data
$data_textcolor = array(255, 255, 255);
// Shadow color for data
$data_shadowcolor = array(0, 0, 0);
// Text color for error messages
$error_textcolor = array(255, 255, 255);
// Shadow color for error messages
$error_shadowcolor = array(0, 0, 0);
//////////////////////////////////////////////////////////////////////////////////////////////////
?>