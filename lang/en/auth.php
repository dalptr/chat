<?php

return [
    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
];
// how to access the language file, and how to use it in a view:
// in a view:
// {{ __('auth.failed') }}
