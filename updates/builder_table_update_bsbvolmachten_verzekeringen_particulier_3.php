<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenVerzekeringenParticulier3 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->string('cat', 255);
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->dropColumn('cat');
        });
    }
}
