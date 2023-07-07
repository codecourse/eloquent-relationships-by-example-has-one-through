@foreach ($referrals as $referral)
    <div>
        {{ $referral->id }} - {{ $referral->referralCode->code }} - {{ $referral->user->name }}
    </div>
@endforeach
