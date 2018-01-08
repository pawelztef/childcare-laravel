<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToSettingsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('settings', function (Blueprint $table) {
      $table->string('catchphrase_line1');
      $table->string('catchphrase_line2');
      $table->string('address_line1');
      $table->string('address_line2');
      $table->string('town');
      $table->string('county');
      $table->string('code');
      $table->string('icon1');
      $table->string('icon2');
      $table->string('icon3');
      $table->string('icon4');
      $table->string('icon5');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('settings', function (Blueprint $table) {
      $table->dropColumn('catchphrase_line1');
      $table->dropColumn('catchphrase_line2');
      $table->dropColumn('address_line1');
      $table->dropColumn('address_line2');
      $table->dropColumn('town');
      $table->dropColumn('county');
      $table->dropColumn('code');
      $table->dropColumn('icon1');
      $table->dropColumn('icon2');
      $table->dropColumn('icon3');
      $table->dropColumn('icon4');
      $table->dropColumn('icon5');
    });
  }
}
