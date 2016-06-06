<?php

class UserTableSeeder extends Seeder {
    
    public function run() {

        DB::table('users')->delete();
        
        $user = new User();
        $user->email = 'bobbie134@me.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->username = 'bobbieo';
        $user->save();

        $user = new User();
        $user->email = 'buffy@buffy.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->username = 'slayer2k';
        $user->save();
    }
}

?>