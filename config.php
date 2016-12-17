<?php

/**********************************************************
 * This is a sample configuration file for the starter.
 * Copy it to "config.php" and change the values that you need;
 * the only necessary change is the repository URL, other
 * changes are optional
 **********************************************************/

/*
 * Change this for the URL of your repository.
 */
define('PRISMIC_URL', 'https://lavieenjaune.prismic.io/api');
define('PRISMIC_TOKEN', 'MC5WaDlnS1NFQUFCOEFKcVdq.aU92D08V77-9bX7vv73vv73vv709Hu-_ve-_ve-_ve-_ve-_vVjvv73vv73vv73vv73vv73vv73vv73vv73vv70p77-9Eg');

/*
 * Disqus integration for comments
 */
define('DISQUS_FORUM', null);
define('DISQUS_API_KEY', null);
define('DISQUS_API_SECRET', null);
define('DISQUS_API_ACCESSTOKEN', null);

/*
 * Page size: applies for any page containing multiple posts: index, archive, search...
 */
define('PAGE_SIZE', 10);

/*
 * Your site metadata
 */
define('SITE_TITLE', 'Union des Jeunes Vietnamiens de France');
define('SITE_DESCRIPTION', 'Union des Jeunes Vietnamiens de France');
define('ADMIN_EMAIL', '');

/*
 * Only change this if you're hacking Blog Template
 */
define('MODE', 'production');
define('DEBUG', 'false');

/**
 * Mailgun API key and domain, for the contact module
 */
define('MAILGUN_APIKEY', null); // API Key, e.g. key-XYZ
define('MAILGUN_PUBKEY', null); // Public API KEY, e.g. pubkey-XYZ
define('MAILGUN_DOMAIN', null); // e.g. sandboxXYZ.mailgun.org
define('MAILGUN_EMAIL', null);
