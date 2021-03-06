<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\Message;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'password',
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
        'phone_verified_at' => 'datetime',
    ];

    public function hasVerifiedPhone()
    {
        return !is_null($this->phone_verified_at);
    }

    public function markPhoneAsVerified()
    {
        $this->phone_verified_at = $this->freshTimestamp();
        $this->save();
    }

    public function markVerifiedByAdmin()
    {
        $this->admin_verified_at = $this->freshTimestamp();
        $this->save();
    }

    public function sendVerificationCode(User $user)
    {
        $code = random_int(100000, 999999);

        $this->forceFill([
            'verification_code' => $code
        ])->save();

        $message = new Message(env('WHATS_UP_TOKEN'));

        $message
                ->setPhoneTo($user->phone)
                ->setPhoneFrom('380714579115')
                ->setCustomUid('GE-TRUCK')
                ->setText($code)
                ->send();

//        if($response['success'] === true){
//            return true;
//        }

        return true;
    }
}
