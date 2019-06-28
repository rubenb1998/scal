<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @return GoogleAccount
     */
    public function googleAccounts()
    {
        return $this->hasMany(GoogleAccount::class);
    }


    /**
     * Relation with Events
     *
     * @return Events
     */
    public function events()
    {
        // Or use: https://github.com/staudenmeir/eloquent-has-many-deep
        return Event::whereHas('calendar', function ($calendarQuery) {
            $calendarQuery->whereHas('googleAccount', function ($accountQuery) {
                $accountQuery->whereHas('user', function ($userQuery) {
                    $userQuery->where('id', $this->id);
                });
            });
        });
    }


    /**
     * Relation with Contacts
     *
     * @return Contact
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }


    /**
     * Relation with ConactGroup
     *
     * @return ContactGroup
     */
    public function contactGroups()
    {
        return $this->hasMany(ContactGroup::class);
    }


    /**
     * Relation with Invites
     *
     * @return CalendarInivte
     */
    public function calendarInvites()
    {
        return $this->hasMany(CalendarInvite::class);
    }
}
