<?php
/**
 * This file can be used to setup your testing environment before running actual
 * tests. To run this one before running any tests, simply add the property 
 * "bootstrap" in your 'phpunit.xml' file inside the tag <phpunit> .
 * Usually, used to load classes which are involved in tests.  
 */


/**
 * Define the constant 'PROJECT_ROOT_DIR' which can be used to load php files.
 */
function setupProjectRoot() {
    define('TESTS_DIR', 'tests');
    $rootDir = substr(__DIR__, 0, strlen(__DIR__) - strlen(TESTS_DIR));
    $rootDirTrimmed = trim($rootDir,'/\\');

    if (explode(DIRECTORY_SEPARATOR, $rootDirTrimmed)[0] == 'home') {
        //linux.
        define('PROJECT_ROOT_DIR', DIRECTORY_SEPARATOR.$rootDirTrimmed.DIRECTORY_SEPARATOR);
    } else {
        define('PROJECT_ROOT_DIR', $rootDirTrimmed.DIRECTORY_SEPARATOR);
    }
}

setupProjectRoot();

require_once PROJECT_ROOT_DIR."src/User.php";

fprintf(STDOUT, "Starting to run tests...\n");