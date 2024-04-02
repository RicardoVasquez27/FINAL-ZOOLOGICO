<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateAnimals extends Migration{
	public function up(){ 
 		Schema::create('animals', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('nombre');
			$table->integer('especie_id');
			$table->integer('recinto_id');
			$table->integer('actividad_id');
			$table->timestamps();

			$table->foreign('especie_id')->references('id')->on('especie')->onDelete('cascade');
            $table->foreign('recinto_id')->references('id')->on('recinto')->onDelete('cascade');
            $table->foreign('actividad_id')->references('id')->on('actividad')->onDelete('cascade');
		});
 	} 
	public function down(){
 
	} 
}