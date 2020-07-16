# AWS Code Deploy for Magento v2.x

<b>Quick Notes:</b>

1) Magento code base go in the /html directory
<br>
2) Magento env.php and config.php go in the /magento directory
<br>
3) Nginx files (nginx.conf, vhost, & Magento-specific nginx) go in the /nginx directory
<br>
4) PHP-fpm files (php.ini, www.conf) go in the /php directory
<br>
5) All scripts referenced in the appspec.yml file go in the /scripts directory
<br>

<b>AWS Code Deploy appspec.yml file</b>
<br>
The appspec.yml file contains a list of resources in the form of artifacts and scripts that are called at certain hook points in the deployment process-- from stopping the application & entering maintenance mode, to deploying the code & restarting the services.
