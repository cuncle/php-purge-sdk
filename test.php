<?php
require_once('./upyun.class.php');

$upyun = new UpYun('bucketname', 'username', 'password');

$url = 'http://xxx.b0.upaiyun.com/2.jpeg\n';

$upyun->purge($url);
