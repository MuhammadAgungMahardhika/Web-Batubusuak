<?php

use App\Models\Accomodation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccomodationGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodation_galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accomodation_id')->unsigned();
            $table->foreign('accomodation_id')->references('id')->on('accomodations');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodation_galleries');
    }
}
