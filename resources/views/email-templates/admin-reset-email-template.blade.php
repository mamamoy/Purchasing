<p>Dear {{ $admin->name }}</p>
<br>
<p>
    Your password on {{ config('app.name') }} was changed successfully.
    Here is your login credentials:
    <br>
    <b>Login ID: </b>{{ $admin->username }} or {{ $admin->email }}
    <br>
    <b>Password: </b>{{ $new_password }}
</p>
<br>
Please, keep your credentials confidential. Your username and password are your own credentials and you should never
share them with anybody else.
<p>
    {{ config('app.name') }} will not be liable for any misuse of your username and password.
</p>
<br>
-------------------------------------------------
<p>
    This email was automatically sent by {{ config('app.name') }}. Do not reply it.
</p>
