<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Ava Santos', 'email' => 'ava.santos@example.com', 'phone' => '0917-555-0101'],
            ['full_name' => 'Liam Reyes', 'email' => 'liam.reyes@example.com', 'phone' => '0917-555-0102'],
            ['full_name' => 'Mia Cruz', 'email' => 'mia.cruz@example.com', 'phone' => '0917-555-0103'],
            ['full_name' => 'Noah Garcia', 'email' => 'noah.garcia@example.com', 'phone' => '0917-555-0104'],
            ['full_name' => 'Isla Mendoza', 'email' => 'isla.mendoza@example.com', 'phone' => '0917-555-0105'],
        ];

        return view('customers_view', ['customers' => $customers]);
    }
}
