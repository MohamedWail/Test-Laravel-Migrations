<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNameInCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TASK: write the migration to rename the column "title" into "name"
        Schema::table('companies', function (Blueprint $table) {
            // Write code here
            DB::statement("ALTER TABLE companies CHANGE COLUMN title name VARCHAR(255)");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            //
        });
    }
}
