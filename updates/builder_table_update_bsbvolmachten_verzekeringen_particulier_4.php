<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenVerzekeringenParticulier4 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->boolean('homeswitch');
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->dropColumn('homeswitch');
        });
    }
}
