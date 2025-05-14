<?php

use App\Filament\Pages\Auth\TwoFactorAuth;
use Solutionforest\FilamentEmail2fa\Models\TwoFaCode;
use Solutionforest\FilamentEmail2fa\Models\TwoFaVerify;
use Solutionforest\FilamentEmail2fa\Pages\LoginSuccessPage;

return [
    'code_table' => 'filament_email_2fa_codes',
    'verify_table' => 'filament_email_2fa_verify',

    'code_model' => TwoFaCode::class,
    'verify_model' => TwoFaVerify::class,

    'expiry_time_by_mins' => 10,

    '2fa_page' => TwoFactorAuth::class,
    'login_success_page' => LoginSuccessPage::class,
];
