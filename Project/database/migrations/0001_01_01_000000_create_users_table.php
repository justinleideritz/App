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

        Schema::create( 'user', function ( Blueprint $table ) {

            $table->id( 'USE_ID' );
            $table->string( 'USE_Name', 50 );
            $table->string( 'USE_Email', 100 )->unique();
            $table->string( 'USE_Password', 150 );
            $table->boolean( 'USE_IsLoggedIn' )->default( false );
            $table->boolean( 'USE_Deleted' )->default( false );
            $table->boolean( 'USE_IsAdmin' )->default( false );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down (): void
    {

        Schema::dropIfExists( 'user' );
    }
};
