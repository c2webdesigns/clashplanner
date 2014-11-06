<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFieldsToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->string('ign');
			$table->enum('roles', array('admin', 'leader', 'elder', 'member'));
			$table->string('avatar');
			$table->string('gender');
			$table->string('facebook_link');
			$table->string('locale');
			$table->integer('timezone');
			$table->string('facebook_id');
			$table->string('access_token');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn('ign');
			$table->dropColumn('roles');
			$table->dropColumn('avatar');
			$table->dropColumn('gender');
			$table->dropColumn('facebook_link');
			$table->dropColumn('locale');
			$table->dropColumn('timezone');
			$table->dropColumn('facebook_id');
			$table->dropColumn('access_token');
		});
	}

}
