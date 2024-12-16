<?php

namespace App\Models;

use App\Models\Presenters\UserPresenter;
use App\Models\Traits\HasHashedMediaTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;


class Konsultasi extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use HasFactory;
    use HasHashedMediaTrait;
    use HasRoles;
    use Notifiable;
    use SoftDeletes;
    use UserPresenter;

    
    protected $guarded = [
        'updated_at',
    ];
    protected $table = 'konsultasi';


    public static function increatmentId()
    {
        $id = 0;
        $model = DB::table('konsultasi')->count();
        if ($model) {
            $id = $model + 1;
        }
        return $id;
    }


    protected static function boot()
    {
        parent::boot();

        // create a event to happen on creating
        static::creating(function ($table) {
            $table->id = Self::increatmentId();
            $table->email = Auth::user()->email;
        });
    }
}

