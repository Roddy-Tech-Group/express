<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

DB::table('admins')->where('id', 1)->update([
    'email' => 'admin@example.com',
    'password' => Hash::make('password')
]);

echo "Admin reset successful";
