<?php namespace BsbVolmachten\Verzekeringen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBsbvolmachtenVerzekeringenZakelijk extends Migration
{
    public function up()
    {
        Schema::create('bsbvolmachten_verzekeringen_zakelijk', function($table)
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
            $table->string('file_desc', 255);
            $table->boolean('fileswitch');
            $table->string('cat', 255);
            $table->boolean('homeswitch');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bsbvolmachten_verzekeringen_zakelijk');
    }
}
