<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $names = ['Motori', 'Informatica', 'Console e Videogiochi', 'Fotografia', 'Telefonia', 'Arredamento e Casalinghi', 'Abbigliamento e Accessori', 'Elettrodomestici', 'Sports', 'Collezionismo'];

        foreach ($names as $name) {
            Category::create(
                [
                    'name' => $name
                ]
            );
        }
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
