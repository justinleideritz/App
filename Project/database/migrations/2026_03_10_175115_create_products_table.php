<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up (): void
    {

        Schema::create( 'products', function ( Blueprint $table ) {

            $table->id();
            $table->string( 'name', 50 );
            $table->string( 'description', 100 )->nullable();
            $table->decimal( 'price', 10, 2 );
            $table->integer( 'quantity' )->default( 0 );
            $table->string( 'image', 255 )->nullable();
            $table->boolean( 'deleted' )->default( false );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down (): void
    {

        Schema::dropIfExists( 'products' );
        Schema::dropIfExists( 'new_products' );
    }
};
