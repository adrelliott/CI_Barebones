<?php

/*
 * This file sets out the app & environment,
 * 
 * once this has been amended, set up the database settings in 
 * config/{environment}/database.php and you're all set.
 * 
 * NOTE: You can fine tune the app settings further using other config files, but
 * this takes care of the basics
 */


/* Set up the project
 * 1. The local directory should be called 'localhost:8888/{domainname.co.uk}
 * 2. The staging sudomain should be staging.{domainname.co.uk}
 * 3. The production domain should be {domainname.co.uk}
 */


## SET THE DOMAIN NAME HERE! ##
define('DOMAIN_NAME', 'campaigndashboard.co.uk'); 



/*          
 *  **IF THIS IS A STANDARD PROJECT, THEN THERE SHOULD BE NO NEED TO AMEND BELOW HERE **
 */



//What are the domains for the environments? NOTE THE PRODUCTION SOMETIMES CHANGES

$app_settings = array();
$production_subdomain = substr(DOMAIN_NAME, 0, 1);  //this is for gridhost
$app_settings['environment'] = array
        (
            'development' => '/Applications/MAMP/htdocs/projects/' . DOMAIN_NAME . '/public_html',
            'staging' => '/var/sites/s/staging.' . DOMAIN_NAME . '/public_html/public_html',
            'production' => '/var/sites/' . $production_subdomain . '/' . DOMAIN_NAME . '/public_html',
        );

//What is the path to the system folder ('core' or 'CI_Framework') for each 
// environment?
$app_settings['system'] = array
        (
            'development' => '../',
            'staging' => '../',
            'production' => '../',
        );

//What is the path to the application folder ('application') for each 
// environment?
$app_settings['application'] = array
        (
            'development' => '../',
            'staging' => '../',
            'production' => '../',
        );

//What now?
/*
 * 1. Go to the 'development' folder and edit the first few lines of 'config.php'
 * 2. Now add the database settings in 'database.php'
 * 3. Now repeat for the 'staging' and 'production' folders
 */
/* End of file app_settings.php */
/* Location: ./application/config/app_settings.php */