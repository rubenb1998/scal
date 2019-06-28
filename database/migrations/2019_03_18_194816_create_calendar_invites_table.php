<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_invites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('token', 32)->unique();
            $table->unsignedInteger('calendar_id');
            $table->foreign('calendar_id')
                ->references('id')->on('calendars')
                ->onDelete('cascade');
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
        Schema::dropIfExists('calendar_invites');
    }
}
