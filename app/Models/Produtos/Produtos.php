<?php

namespace App\Models\Produtos;

use App\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'almo_go_produtos';
    public $timestamps = true;
    protected $fillable = [
        'nm_produto'
    ];
    protected $guarded = [];


//    public function address() {
//        return $this->belongsTo(Address::class, 'city_id');
//    }

}
