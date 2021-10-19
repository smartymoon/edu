<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/


Artisan::command('inspire', function () {
    $table =
'migrations,
users,
password_resets,
admin_roles,
admin_menu,
admin_role_users,
admin_role_permissions,
admin_users,
admin_permissions,
admin_user_permissions,
admin_role_menu,
admin_operation_log,
oauth_auth_codes,
oauth_access_tokens,
oauth_refresh_tokens,
oauth_clients,
oauth_personal_access_clients,
teachers,
schools,
invitations,
students,
follows,
line_users,
messages,
admin_messages';
            \Artisan::call('iseed', [
                'tables' => $table,
                '--force' => true,
            ]);
})->describe('Display an inspiring quote');
