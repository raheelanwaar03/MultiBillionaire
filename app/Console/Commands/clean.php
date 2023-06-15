<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleaning Command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        // $easyPaisa = new EasyPaisaMangement();
        // $easyPaisa->easy_name = 'test';
        // $easyPaisa->easy_num = '9999999999';
        // $easyPaisa->text = 'Payment page text from admin';
        // $easyPaisa->status = 1;
        // $easyPaisa->save();

        // Referal limite
        // $setting = new Setting();
        // $setting->first_refer = '50';
        // $setting->second_refer = '30';
        // $setting->third_refer = '10';
        // $setting->minimum_amount = '50';
        // $setting->maximun_amount = '500';
        // $setting->status = 1;
        // $setting->save();

        // Verification page text

        // $verificationText = new verificationText();
        // $verificationText->text = 'Welcome to MoviesPay website we will approve your account after checking your given details';
        // $verificationText->status = 1;
        // $verificationText->save();

        // //    set level according to thier referal

        // $level = new ReferalLevel();
        // $level->level1 = 1;
        // $level->level2 = 2;
        // $level->level3 = 3;
        // $level->level4 = 4;
        // $level->level5 = 5;
        // $level->level6 = 6;
        // $level->level7 = 7;
        // $level->level8 = 8;
        // $level->level9 = 9;
        // $level->level10 = 10;
        // $level->status = 1;
        // $level->save();


        $user = new User();
        $user->name = 'Admin';
        $user->referal = 'default';
        $user->balance = '0';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->referal = 'default';
        $user->balance = '0';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->status = 'approved';
        $user->save();
    }
}
