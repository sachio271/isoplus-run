<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'level',
        'ektp',
        'type',
        'name',
        'birthPlace',
        'birthDate',
        'ktpAddress',
        'ktpSubDistrict',
        'ktpDistrict',
        'ktpCity',
        'address',
        'subDistrict',
        'district',
        'city',
        'phoneNo',
        'email',
        'gender',
        'weight',
        'height',
        'bloodType',
        'religion',
        'createdBy',
        'createdDate',
        'changeBy',
        'changeDate',
        'ektp2',
        'startDate',
        'endDate',
        'struct',
        'status',
        'reason',
        'documentNo',
        'information',
        'createdBy2',
        'createdDate2',
        'changeBy2',
        'changeDate2',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'level',
        'ektp',
        'type',
        'name',
        'birthPlace',
        'birthDate',
        'ktpAddress',
        'ktpSubDistrict',
        'ktpDistrict',
        'ktpCity',
        'address',
        'subDistrict',
        'district',
        'city',
        'phoneNo',
        'email',
        'gender',
        'weight',
        'height',
        'bloodType',
        'religion',
        'createdBy',
        'createdDate',
        'changeBy',
        'changeDate',
        'ektp2',
        'startDate',
        'endDate',
        'struct',
        'status',
        'reason',
        'documentNo',
        'information',
        'createdBy2',
        'createdDate2',
        'changeBy2',
        'changeDate2',
    ];

    /**
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
}
