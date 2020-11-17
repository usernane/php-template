# PHP Project Template
A template project which can be used to create PHP projects. This template is used to teach you how to setup a PHP development environment in general and to setup Apache NetBeans specifically.

## Root Directory Content

* [`composer.json`](https://github.com/usernane/php-template/composer.json): Used to set the libraries at which the project depends on. Also, used to set package information if the package will be published to https://packagist.org.
* [`phpunit.xml`](https://github.com/usernane/php-template/phpunit.xml): Configuration file which is used to configure PHPUnit.
* [`php_cs.php`](https://github.com/usernane/php-template/php_cs.php): Coding standards fixer configuration file. Used to set rules.

In addition to the given files, the root can hold more configuration files. For example, you might use some continuous integration service (such as [Travis CI](travis-ci.com)) or code quality tools (such as [SonarCloud](sonarcloud.io)). In this case, configuration files can be placed at the root.

## Project Structure

The structure that I like to go with is the following:
* `src` Folder. This folder contains the actual project code. Always kept under source control.
* `tests` Folder. Contains PHPUnit test classes. Kept under source control but outside the tar archive using `.gitattributes`.
* `vendor` Folder. Contains the libraries at which the project depends on. Downloaded using composer.

## Setup in Apache NetBeans IDE

### PHP Interpreter

The first step in setting up your IDE for PHP applications development is to specify the location of your interpreter. I recomend that you install the interpreter as part of some AMP stack. AMP stands for "Apache, MySQL & PHP". As for me, I prefer to use a stack which is called [Bitnami WAMP](https://bitnami.com/stack/wamp/installer) (The W means `Windows OS`). For more information on installation, [check here](https://webfiori.com/learn/installation#downloading-wamp-stack).

Assuming that the stack is installed on `C:\Server`, then PHP interpreter will be at `C:\Server\php`. To setup the path to PHP interpreter in Apache NetBeanse, select `Tools > Options` from main menu. In the window that will appear, make sure that you are in the tab `General`. In this tab, you can set the path to your PHP interpreter (which is `C:\Server\php\php.exe` in my case) . 

### Composer

Composer is basically an application which is used to download and install libraries or frameworks that your project depends on. For example, you might need a library which generates QR codes. Simply, you include the name of the library in your `composer.json` file and right click your project and select composer from the menu and hid "Update".

Before using composer in Apache NetBeans, first you need to download `composer.phar` Archive from https://getcomposer.org/download/ . Once the archive is downloaded, copy the archive somewhere in your workspace. In Apache NetBeans IDE, select `Tools > Options`. In the window that will appear, select PHP. After that, go to the tab `Frameworks & Tools`. From the list on the left side, select `Composer`. In the window that will appear, specify the path to your `composer.phar` archive. Once specified, you can run composer commands without issues.

### PHP Unit

PHP Unit is a unit testing framework which is used to automate the process of testing PHP applications. If your application is well designed, it will be easy to automate testing (specially for backend part). Before using PHP unit, PHP unit archive must be downloaded. There are many versions of PHP unit. Each one is used to test code for different PHP versions. You can check [here](https://phpunit.de/getting-started/phpunit-9.html) for more information.

Once the archive is downloaded, put it somewhere in your workspace. Once you do that, open Apache NetBeans IDE. From the main menu, select `Tools > Options`. In the window that will appear, select PHP. After that, go to the tab `Frameworks & Tools`. From the list on the left side, select `PHPUnit`. In the window that will appear, specify the path to your `phpunit.phar` archive. Once specified, you are done.

Note that for each project, there are 3 additional things that must be setup to be able to run tests:

* Enable PHP Unit on the project.
* Sepecify tests folder.
* Set the configuration to `phpunit.xml`.

To setup the 3, right click the project and select `Properties`. From the side menu, select `Testing`. Then add the folder `teses` to the box in the top. After that, enable PHPUnit by checking the box at the bottom. Once finished, select `PHPUnit` from the side menu. In the window that will appear, specify the path to your `phpunit.xml` Configuration. If done, you will be able to run tests by right clicking your project and hitting `Test`.



