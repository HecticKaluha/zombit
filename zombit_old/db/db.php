<?php

function dbConnect(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = "zombit";

    $conn = null;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

function executeQuery($sql, $values = null){
    $conn = dbConnect();
    $query = $conn->prepare($sql);
    if($values != null){
        $query->execute($values);
    }
    else{
        $query->execute();
    }
    $last_id = $conn->lastInsertId();
    $conn = null;
//    echo $sql;
//    print_r($res);
    return [$query, $last_id];
}

function login($post){
    $sql = 'SELECT * FROM users where username = :username and password = :password';
//    $prepare = [':username' => $post['username'], ':password' => PASSWORD_HASH($post['password'], PASSWORD_BCRYPT)];
    $prepare = [':username' => $post['username'], ':password' => $post['password']];

    return executeQuery($sql, $prepare)[0]->fetch();
}

function name(){
    $sql = 'SELECT * FROM games LIMIT 4';
    $prepare = [':id' => 'waarde'];
    return executeQuery($sql, $prepare)[0]->fetchAll();
}