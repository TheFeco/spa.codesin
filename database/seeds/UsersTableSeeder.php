<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        $admin = new User;
        $admin->name ="Francisco Espinoza";
        $admin->email = "fco@whipple.mx";
        $admin->password = '123456';
        $admin->save();

        $writer = new User;
        $writer->name ="aida cabrera";
        $writer->email = "aida@whipple.mx";
        $writer->password = '123456';
        $writer->save();
    }
}
