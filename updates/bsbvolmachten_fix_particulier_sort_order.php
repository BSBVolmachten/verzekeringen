<?php namespace Bsbvolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenVerzekeringenParticulier5 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}