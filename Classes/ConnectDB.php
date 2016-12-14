<?php
/**
 * Created by PhpStorm.
 * User: Regor
 * Date: 14/12/16
 * Time: 16:26
 */

namespace Core;
include('Singleton.php');

class ConnectDB extends  Singleton
{

    public function SingletonTest()
    {
        echo " Im a singleton method ";
    }

    public function connect()
    {


    }

    public function disconnect()
    {

    }

} 