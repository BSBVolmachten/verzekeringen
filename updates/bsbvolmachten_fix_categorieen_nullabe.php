<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenVerzekeringenCategorieen extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_verzekeringen_categorieen', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_verzekeringen_categorieen', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}