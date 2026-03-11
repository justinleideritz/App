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

        Schema::create( 'new_products', function ( Blueprint $table ) {

            $table->id( 'PRO_ID' );
            $table->string( 'PRO_Name', 50 );
            $table->string( 'PRO_Description', 100 )->nullable();
            $table->decimal( 'PRO_Price', 10, 2 );
            $table->integer( 'PRO_Quantity' )->default( 0 );
            $table->string( 'PRO_Image', 255 )->nullable();
            $table->boolean( 'PRO_Deleted' )->default( false );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down (): void
    {

        Schema::dropIfExists( 'new_products' );
    }
};
