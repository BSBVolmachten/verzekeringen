<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenVerzekeringenIconen extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_verzekeringen_iconen', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('slug', 255);
            $table->string('name', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_verzekeringen_iconen');
    }
}
