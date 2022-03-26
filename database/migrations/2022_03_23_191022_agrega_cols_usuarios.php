<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregaColsUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table ){
            $table->string('apellido')->after('name');
            $table->string('edad')->nullable()->after('apellido');
            $table->string('telefono')->nullable()->after('edad');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table ){
            $table->dropColumn('apellido');
            $table->dropColumn('edad');
            $table->dropColumn('telefono');
        });
    }
}
