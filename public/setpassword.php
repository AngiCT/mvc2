<?php
# console/setpassword.php
require "../app/models/user.php";

$users = \App\Models\User::all();

foreach ($users as $user) {
    // echo $user->name . "\n";
    echo $user->name . ': ' . $user->setPassword('secret') . "\n";
    echo '<br>';

}