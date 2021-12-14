<?php
require __DIR__ . "/../../vendor/autoload.php";

use Models\Client;
use Models\User;

class ClienteController
{
    public function store()
    {
        $user = new User();
        $user->name = "Lucasthomaz";
        $user->email = "teste1@asd.gfhfd";
        $user->password = "aughdsjdg";
        $user->save();

        $client = new Client();
        $client->addClient($user, "a12328136", '123dsfsdf', 'ajkshdjkhasgd');
        $client->save();
    }

    public function error($data)
    {
    echo "oi";
    }
}

