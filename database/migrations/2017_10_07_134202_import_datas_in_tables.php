<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\CompanyModel;
class ImportDatasInTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        CompanyModel::create([
            'name' => 'securiscope',
            'phone' => '0877332219',
            'email' => 'securiscope@abv.com',
            'address' => 'ул. "Дякон Игнатий" №19',
            'city' => 'София'
        ]);

        CompanyModel::create([
            'name' => 'codexive',
            'phone' => '0881259468',
            'email' => 'codexive@abv.bg',
            'address' => 'ул. „Люляк“ 11, 7000 Пазара, Русе',
            'city' => 'Русе'
        ]);

        CompanyModel::create([
            'name' => 'coceptual',
            'phone' => '0882389674',
            'email' => 'coceptual@abv.bg',
            'address' => '7013 Здравец Изток, Русе',
            'city' => 'Русе'
        ]);

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
