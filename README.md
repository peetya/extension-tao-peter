# extension-tao-peter

## Enable UDP logger
Add the following code to `config/generis/log.conf.php`:
```
return new oat\oatbox\log\LoggerService(array(
    'logger' => new \oat\oatbox\log\LoggerAggregator(
        array(

            new oat\oatbox\log\logger\TaoLog(array(
                'appenders' => array(
                    array(
                        'class' => 'UDPAppender',
                        'host' => '127.0.0.1',
                        'port' => 5775,
                        'threshold' => 0,
                        'prefix' => 'tao'
                    )
                )
            )),
        )
    )
));
```

Then start the UDP Listener by executing the following command:
`php taoDevTools/scripts/UDPListener.php