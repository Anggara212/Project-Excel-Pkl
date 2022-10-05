<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Exports\SantriExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class Santri extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'nik',
        'alamat',
        'jenis_kelamin',
        'tempat_lahir',
    ];
}