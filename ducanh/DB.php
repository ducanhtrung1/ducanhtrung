<?php
try {
    $db = new PDO('pgsql:host=ec2-18-214-119-135.compute-1.amazonaws.com;dbname=dcn2l34onuh0g3','gnhyavjavygcrj','9fc64148d6d2e83d43e60c20567f140c6b2f3ae59cdf57e1876289acba55b0bd');
    return $db;
}catch (Exception $e){
    echo "Connect fail";
}
