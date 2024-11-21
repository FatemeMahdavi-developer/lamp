<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin>
 */
class adminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname'=>'ادمین اصلی',
            'username'=>'admin',
            'password'=>Hash::make('admin'),
            'mobile'=>'09120001122',
            'email'=>'info@gmail.com',
            'city'=>1,
            'province'=>1,
            'is_main'=>1,
        ];
    }
}
