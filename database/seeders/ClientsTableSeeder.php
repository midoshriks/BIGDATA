<?php

namespace Database\Seeders;

use App\Models\client;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        for ($i = 1; $i < 3; $i++) {
            # code...
            foreach ($users as $key => $user) {
                # code...
                $client = client::create([
                    'first_name' => 'Client',
                    'last_name' => 'clients',
                    'full_name' => 'first + last',
                    'phone_one' => '012000000'.$i++,
                    'phone_two' => '012000000'.$i++,
                    'phone' => '03788789',
                    'type_compane' => 1,
                    'type_location' => 'here locarion mime',
                    'detales' => 'detales markt',
                    'qr_code' => $user->id,
                ]);
            }
        }
    }
}
