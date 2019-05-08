<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBsbvolmachtenVerzekeringenCategorieen extends Migration
{
    public function up()
    {
        Schema::dropIfExists('bsbvolmachten_verzekeringen_categorieen');
    }
    
    public function down()
    {
        Schema::create('bsbvolmachten_verzekeringen_categorieen', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
        });
    }
}
