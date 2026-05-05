<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Buku;

class Kategori extends Model
{
   protected $table = 'kategori';
   public $timestamps = false;
   protected $primaryKey = 'idkategori';
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'idkategori';
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
    protected $fillable = ['nama_kategori'];

    public function buku()
    {
<<<<<<< HEAD
        return $this->hasMany(Buku::class);
=======
        return $this->hasMany(Buku::class, 'idkategori', 'idkategori');
    }

    public function getRouteKeyName()
    {
    return 'idkategori';
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
    }
}
