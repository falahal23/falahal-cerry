<?php
namespace Database\Seeders;

use run;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\CreateFirstUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateFirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data['name']     = 'admin';
        $data['email']    = 'flhl@gmail.com';
        $data['password'] = Hash::make('flhl');
        user::create($data);
    }
}
