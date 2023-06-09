<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'role',
        'name',
        'surname',
        'mobilenoprefix',
        'mobileno',
        'email',
        'password',
        'privacy',
        'marketing',
        'status',
        'aboutme',
        'birthdate',
        'profilepic',
        'city',
        'gender',
        'email_verified_at',
        'mobile_verified_at',
        'email_verification_code',
        'mobile_verification_code',
        'user_type',
        
        'height',
        'size',
        'shoeSize',
        'languages',
        'nationality',
        'hairColor',
        'description',
        'profileVisibility',
        'smsNotification',
        'privacyProfile',
        'last_seen',
        'credit',
        'hostess_credit',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["0", "1", "2"][$value],
        );
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }
}
