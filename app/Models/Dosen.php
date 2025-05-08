<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_dosen','telepon','email','jabatan','status', 'foto'];
    public $timestamp = true;

    public function deleteimage(){
        if($this->foto && file_exists(public_path('storage/dosen/'. $this->foto))){
            return unlink(public_path('storage/dosen/'. $this->foto));
        }
    }
}
