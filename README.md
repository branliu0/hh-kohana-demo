## Kohana 3.2 Demo for HackHarvard 2012

To install, first rename installed.php to install.php and navigate to your base URL in order to check that your environment is ready to support the Kohana framework. You can rename it to something else once you have verified that your environment passes all requirements.

Then please remove the .template ending for the following files, and fill your configuration as necessary:

    application/bootstrap.php.template
    modules/database/config/database.php/template
    htaccess.template (rename to .htaccess)

Please also create the following table so that this application can run properly:

    CREATE TABLE `kohana_posts` (
    `author` varchar(255) NOT NULL,
    `body` text NOT NULL);
