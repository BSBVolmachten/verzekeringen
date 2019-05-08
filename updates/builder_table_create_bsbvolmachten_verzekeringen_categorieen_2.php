<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenVerzekeringenCategorieen2 extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_verzekeringen_categorieen', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_verzekeringen_categorieen');
    }
}
