# wp-config-setup
Config, htaccess, phploy, robots and utilities to add to fresh install of WP. Avoids editing files on server, avoids filezille. 

## Config
The config allows for wp-config to be deployed without fear of breaking production site. No more editing files on the server

## Deployment - Phploy
https://github.com/banago/PHPloy

## htaccess
https://github.com/YumpDigital/yump-ultimate-htaccess/blob/master/.htaccess

## Ignore file
Ignore file is setup to ignore the public folder inside your theme. This is useful if you are using a task runner to generate a public folder. 

## Robots
Switches between standard robots and staging robots based on the URL via htaccess. 

## Maintenance 
See htaccess for instructions on putting the site into maintenance mode. 

## Staging Moved
See htaccess for instructions on redirecting your client to the production site once it is ready. 