<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'products';

    protected $fillable
                     = [
            'name',
            'description',
            'price',
            'quantity',
        ];

    public function getID ()
    {

        return $this->PRO_ID;
    }

    public function getName ()
    {

        return $this->PRO_Name;
    }

    public function getDescription ()
    {

        return $this->PRO_Description;
    }

    public function getPrice ()
    {

        return $this->PRO_Price;
    }

    public function getQuantity ()
    {

        return $this->PRO_Quantity;
    }

    public function getImage ()
    {

        return $this->PRO_Image;
    }
}
