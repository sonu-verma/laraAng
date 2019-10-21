@component('mail::message')
# Request for change password

Click below button for resets password.

@component('mail::button', ['url' => 'http://localhost:4200/response-password-reset?token='.$token ])
Reset Passowrd
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
