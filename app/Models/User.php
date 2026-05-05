<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
=======
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var list<string>
=======
     * @var array<int, string>
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'role',
        'vendor_id',
        'id_google',
        'email_verified_at',
        'otp',
=======
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
     * @var list<string>
=======
     * @var array<int, string>
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
<<<<<<< HEAD
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'idvendor');
    }
=======
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
}
