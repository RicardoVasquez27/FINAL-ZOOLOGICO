<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateActividads extends Migration{
	public function up(){ 
 		Schema::create('actividads', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('nombre');
			$table->date('fecha');
			$table->time('hora');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}