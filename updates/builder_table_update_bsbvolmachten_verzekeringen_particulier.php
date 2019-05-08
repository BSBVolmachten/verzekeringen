<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBsbvolmachtenVerzekeringenParticulier extends Migration
{
    public function up()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->string('file_desc', 255);
        });
    }
    
    public function down()
    {
        Schema::table('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->dropColumn('file_desc');
        });
    }
}
