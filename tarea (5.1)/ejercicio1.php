<?php
class client{
    var $name;
    var $age;
    var $city;
    public function __construct()
    {
        
    }
}

#Objeto a json
$client= new client;
$client->name = "Pepe";
$client->age = 35;
$client->city="San Lorenzo";

$code_json = json_encode($client);

echo $code_json;
?>