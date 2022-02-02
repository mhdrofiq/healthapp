<?php

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Kreait\Firebase\Auth;

$factory = (new Factory)
    ->withServiceAccount(__DIR__.'/FirebaseKey.json')
    ->withDatabaseUri('https://appdev-project-8eafc-default-rtdb.asia-southeast1.firebasedatabase.app/');
$database = $factory->createDatabase();
$auth = $factory->createAuth();

?>