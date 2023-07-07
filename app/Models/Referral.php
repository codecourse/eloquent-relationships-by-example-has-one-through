<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    public function referralCode()
    {
        return $this->belongsTo(ReferralCode::class);
    }

    public function user()
    {
        return $this->hasOneThrough(User::class, ReferralCode::class, 'id', 'id', 'referral_code_id', 'user_id');
    }
}
