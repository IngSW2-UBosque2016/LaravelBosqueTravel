Click here to reset your password: <a href="{{ $link = url('password/reset', $token).'?userName='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>



