<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 27.09.2018
 * Time: 18:12
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'barcode', 'quantity', 'weight'
    ];

}