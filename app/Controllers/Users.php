<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'jsantos', 'full_name' => 'Jordan Santos', 'role' => 'Administrator'],
            ['username' => 'mreyes', 'full_name' => 'Morgan Reyes', 'role' => 'Manager'],
            ['username' => 'acastro', 'full_name' => 'Alex Castro', 'role' => 'Cashier'],
            ['username' => 'tgarcia', 'full_name' => 'Taylor Garcia', 'role' => 'Cashier'],
            ['username' => 'rcruz', 'full_name' => 'Riley Cruz', 'role' => 'Inventory Staff'],
        ];

        return view('users_view', ['users' => $users]);
    }
}
