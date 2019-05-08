<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenVerzekeringenParticulier2 extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->boolean('fileswitch');
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->dropColumn('fileswitch');
        });
    }
}
