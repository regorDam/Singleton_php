<?php
/**
 * Created by PhpStorm.
 * User: Regor
 * Date: 14/12/16
 * Time: 16:22
 */

namespace Core;
include('ConnectDB.php');

echo "Instance -> " . get_class(ConnectDB::Instance());
echo ConnectDB::Instance()->SingletonTest();