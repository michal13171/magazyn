<?php
/**
 * Created by IntelliJ IDEA.
 * User: Cassiopeia
 * Date: 03.10.2018
 * Time: 17:21
 */

namespace App\Middleware;

use Illuminate\Database\Eloquent\Model;

class productRequest extends Model
{
    private $rules = [
        'name' => 'required',
        'barcode' => 'required',
        'quantity' => 'required',
        'weight' => 'required'
    ];

    public function __construct()
    {
        $this->rules;
    }
}