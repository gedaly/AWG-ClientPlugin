<?php

if (is_admin()) { // note the use of is_admin() to double check that this is happening in the admin
    $config = array(
        'slug' => awg-client(__FILE__), // this is the slug of your plugin
        'proper_folder_name' => 'awg-client', // this is the name of the folder your plugin lives in
        'api_url' => 'https://api.github.com/repos/gedaly/AWG-ClientPlugin', // the github API url of your github repo
        'raw_url' => 'https://raw.github.com/gedaly/AWG-ClientPlugin/master', // the github raw url of your github repo
        'github_url' => 'https://github.com/gedaly/AWG-ClientPlugin', // the github url of your github repo
        'zip_url' => 'https://github.com/gedaly/AWG-ClientPlugin/zipball/master', // the zip url of the github repo
        'sslverify' => true // wether WP should check the validity of the SSL cert when getting an update, see https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/2 and https://github.com/jkudish/WordPress-GitHub-Plugin-Updater/issues/4 for details
        'requires' => '3.0', // which version of WordPress does your plugin require?
        'tested' => '3.6', // which version of WordPress is your plugin tested up to?
        'readme' => 'README.txt', // which file to use as the readme for the version number
        'access_token' => '', // Access private repositories by authorizing under Appearance > Github Updates when this example plugin is installed
    );
    new WP_GitHub_Updater($config);
}





?>