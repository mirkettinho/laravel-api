<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technology', function (Blueprint $table) {
          // RELAZIONE CON TABELLA PROJECTS
          $table->unsignedBigInteger("project_id");
          $table->foreign("project_id")
                    ->references("id")
                    ->on("projects")
                    ->cascadeOnDelete();


          // RELAZIONE CON TABELLA TECHNOLOGIES
          $table->unsignedBigInteger("technology_id");
          $table->foreign("technology_id")
                    ->references("id")
                    ->on("technologies")
                    ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
};
