<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Kategori;

class Buku extends Model
{
   protected $table = 'buku';
   public $timestamps = false;
   protected $primaryKey = 'idbuku';
    protected $fillable = ['idkategori', 'kode', 'judul', 'pengarang'];
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'idbuku';
    protected $fillable = ['kode', 'judul', 'pengarang', 'idkategori'];
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'idkategori', 'idkategori');
    }
<<<<<<< HEAD
=======

    public function getRouteKeyName()
    {
    return 'idbuku';
    }
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
}
