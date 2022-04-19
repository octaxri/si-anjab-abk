<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationUsersToRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('anjab_abk.users', function (Blueprint $table) {
        //     $table->foreign('role_id')
        //         ->references('id')
        //         ->on('anjab_abk.roles')
        //         ->onDelete('cascade')
        //         ->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('anjab_abk.users', function (Blueprint $table) {
        //     $table->dropForeign('users_role_id_foreign');
        // });
    }
}
