    <?php

        session_set_cookie_params(3600,"/");
        session_start();



        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);

        define('DB_SERVER', 'localhost');

        define('DB_USERNAME', 'ajeet');

        define('DB_PASSWORD', 'ajeet');

        define('DB_DATABASE', 'ajeet');




    ?>