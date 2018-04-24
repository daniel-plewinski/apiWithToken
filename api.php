<?php

$users = [
    [
    'id' => 1,
    'name'=> 'Adam Nowak',
    'age' => 24
    ],
    [
    'id' => 2,
    'name'=> 'Anna Pinda',
    'age' => 18
    ],
];
$headers = apache_request_headers();
$token = '12345';

if(isset($headers['Authorization']) && $headers['Authorization'] === $token ) {
    echo json_encode($users);
} else {
    header('HTTP/1.1 401 Bad token');
}


    