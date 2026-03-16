<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run (): void
    {

        $aProducts = [
            'Mango Loco'   => [
                'Just a description',
                2.50,
                20,
                'storage/app/private/images/mango_loco.webp',
            ],
            'Ultra White'  => [
                'Just a description',
                2.50,
                30,
                null,
            ],
            'Viking Berry' => [
                'just a description',
                2.50,
                10,
                null,
            ],
        ];

        foreach ( $aProducts as $sName => $aProduct )
        {

            DB::table( 'products' )->insert( [
                'name'        => $sName,
                'description' => $aProduct[0],
                'price'       => $aProduct[1],
                'quantity'    => $aProduct[2],
                'image'       => $aProduct[3],
            ] );
        }
    }
}
