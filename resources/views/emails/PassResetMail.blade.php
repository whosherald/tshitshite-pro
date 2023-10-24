@component('mail::message')
# Hi {{ $data['name'] }}

You have made a password change request which went successfully.

Your new Password as created by you is : {{ $data['password'] }}

@component('mail::button', ['url' => 'http://localhost:8000'])
Login here with your new password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent  