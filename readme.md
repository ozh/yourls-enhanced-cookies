Plugin for YOURLS 1.7.7+: Enhanced Auth Cookies


# What for

Out of the box, YOURLS auth cookies have site dependent unique name. This plugin enhances the cookie based authentication, making each auth cookie name unique and time based with a 1 minute expiration.

This plugin is a proof of concept to show how to customize your own authentication policy. Copy, edit it and build on it to suit your needs.


# How to

* In `/user/plugins`, create a new folder named `enhanced-cookies`
* Drop these files in that directory
* Go to the Plugins administration page and activate the plugin 
* Have fun


# FAQ

1. "it doesn't work!"
	* Sorry, it does for me.

2. "Why not make this core and default YOURLS behavior?"
	* Because 99.9% of YOURLS users are just happy with the way things work out of the box. Adding feature means adding complexity and having to deal with all kind of setups and use cases. This is exactly why YOURLS has a plugin API: it allows feature for the 0.1% of people who really need it. 


# License

Do whatever the hell you want with it.