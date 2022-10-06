<?php

declare(strict_types=1);

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\HRIS\Karyawan;
use App\Models\HRIS\MasterEis;
use App\Models\HRIS\MasterEisCompact;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nik', 'name', 'email'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    public function getAvatarAttribute()
    {
        return "https://cdn.trans7.co.id/hris/Photo/{$this->nik}.jpg?cdn[w]=64&cdn[h]=64&cdn[fit]=crop-top";
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'nik', 'NIK');
    }

    public function masterEis()
    {
        return $this->belongsTo(MasterEis::class, 'nik', 'NIK');
    }

    public function masterEisCompact()
    {
        return $this->belongsTo(MasterEisCompact::class, 'nik', 'NIK');
    }
}
