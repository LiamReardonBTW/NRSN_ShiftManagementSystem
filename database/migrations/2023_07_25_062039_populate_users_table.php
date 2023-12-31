<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'admin', 'email' => 'admin@nrsn.com', 'password' => bcrypt('root1234'), 'role_as' => 1, 'active_status' => '1'],
            ['id' => 2, 'name' => 'manager', 'email' => 'manager@nrsn.com', 'password' => bcrypt('root1234'), 'role_as' => 2, 'active_status' => '1'],
            ['id' => 3, 'name' => 'worker', 'email' => 'worker@nrsn.com', 'password' => bcrypt('root1234'), 'role_as' => 3, 'active_status' => '1'],
            ['id' => 4, 'name' => 'inactive', 'email' => 'inactive@nrsn.com', 'password' => bcrypt('root1234'), 'role_as' => 3, 'active_status' => '0'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
