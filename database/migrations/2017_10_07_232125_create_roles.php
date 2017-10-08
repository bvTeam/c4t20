<?php

use App\CompanyModel;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Role;

class CreateRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $role = Role::create(['name' => 'writer']);
        $a = User::where('id', 1)->first();
        $a->assignRole($role->name);


        $role1 = Role::create(['name' => 'company']);
        $b = User::where('id', 2)->first();
        $b->assignRole($role1->name);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
