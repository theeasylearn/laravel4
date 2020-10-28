<?php 
    use Monolog\Logger; //import Logger
    use Monolog\Handler\StreamHandler; //Import StreamHandler
    $logger = new Logger('bhavnagar'); //create object of logger class 
    $logger->pushHandler(new StreamHandler('log/myapp.log', Logger::DEBUG));
    //declaring variable is not enough you also have to return array to use variable in whole laravel app 
    return ['logger' => $logger];
?>
