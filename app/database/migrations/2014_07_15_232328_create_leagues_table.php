<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('leagues', function($table)
            {
                $table->engine = 'InnoDB';

                $table->increments('id');
                $table->integer('leagueId');
                $table->string('color');
                $table->string('leagueImage');
                $table->integer('defaultTournamentId');
                $table->integer('defaultSeriesId');
                $table->string('shortName');
                $table->string('url');
                $table->string('label');
                $table->boolean('noVods');
                $table->integer('menuWeight');
                $table->string('twitch');
                $table->string('youtube');
                $table->string('azubu');
                $table->string('leagueTournaments');

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
	    Schema::drop('leagues');
	}

}