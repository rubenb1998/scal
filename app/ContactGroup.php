<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactGroup extends Model
{

    /**
     * Relation with Contacts
     *
     * @return Contact
     */
    public function contacts() {
        return $this->hasMany(Contact::class);
    }
}
