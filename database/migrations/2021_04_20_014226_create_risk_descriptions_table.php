<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiskDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('risk_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('risk_cause_id')->nullable()->constrained();
            $table->foreignId('likelihood_id')->nullable()->constrained();
            $table->foreignId('impact_id')->nullable()->constrained();
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('risk_descriptions');
    }
}
