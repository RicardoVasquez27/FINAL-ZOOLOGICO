<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateRecintos extends Migration{
	public function up(){ 
 		Schema::create('recintos', function (Blueprint $table) { 
			$table->bigIncrements('id');
			$table->string('nombre');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}