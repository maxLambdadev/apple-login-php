<?PHP
 error_reporting(E_ERROR | E_PARSE);
//database connection



$host = 'localhost';
$username = 'cooprime1980';
$password = '7f=_g9opKTO5';
$database = 'myappparticipant';
//jdexCOOP852%0022

//}
try {
        // Try Connect to the DB with mysqli_connect function - Params {hostname, userid, password, dbname}
        $link = mysqli_connect($host, $username, $password, $database);
    } catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
        echo "MySQLi Error Code: " . $e->getCode() . "<br />";
        echo "Exception Msg: " . $e->getMessage();
        exit; // exit and close connection.
    }

    //No Exceptions were thrown, we connected successfully, yay!
    echo "Success, we connected without failure! <br />";
    echo "Connection Info: " . mysqli_get_host_info($link) . PHP_EOL;

?>