<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RfidLeitura extends Model


{
    protected $table = 'rfid_leituras';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'reading_reader_ip',
        'reading_epc_hex',
        'reading_reader_mac',
        'reading_company_id',
        'reading_antenna',
        'reading_movement_type',
        'reading_created_at',
        'reading_reader_name',
        'reading_rpm',
    ];
}
