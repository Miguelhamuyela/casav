<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidacies', function (Blueprint $table) {
            $table->id();
            /* identity */
            $table->string('name');
            $table->string('surname');
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('bi', 14)->unique();
            $table->date('birth');
            $table->string('residence');
            $table->string('tel', 14);
            $table->string('email');

            /* academic */
            $table->string('qualifications');
            $table->string('ocupation');

            /* docs */
            $table->string('doc_bi');
            $table->string('doc_covid');
            $table->string('doc_qualifications');

            /* eleitory data */
            $table->string('province_id');

            $table->string('county');
            $table->string('placeregion');

            $table->string('eleitorycard')->nullable();
            $table->string('group')->nullable();

            $table->dateTime('testdate')->nullable();
            $table->string('privilegiate', 1)->nullable();

            $table->string('perpage');

            $table->string('state', 15)->default('Recebida');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidacies');
    }
}
