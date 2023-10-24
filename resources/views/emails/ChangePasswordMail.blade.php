@component('mail::message')
# Hi {{ $data['name'] }}

It seems like you forgotten your password after trying to login numerous times.
No worries, it happens to all the normal people, Good news is, if you recieved this email with intensions of recover your pasword, you are most probably the rightful recipient.
You can reset your password by clicking on the button below.

@component('mail::button', ['url' => url('/reset-password', [$data['token']]) ])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
