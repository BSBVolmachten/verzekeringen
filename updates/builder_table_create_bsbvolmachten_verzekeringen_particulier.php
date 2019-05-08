<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenVerzekeringenParticulier extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_verzekeringen_particulier', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('short_desc', 255);
            $table->boolean('fullswitch');
            $table->string('icon', 255);
            $table->text('text');
            $table->text('dekking');
            $table->integer('sort_order');
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_verzekeringen_particulier');
    }
}
