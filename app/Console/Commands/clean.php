<?php

namespace App\Console\Commands;

use App\Models\level;
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

        //  inserting levels

        $level = new level();
        $level->level = 'level 1';
        $level->invest = '10';
        $level->dailyProfit = '0.6';
        $level->duration = '45';
        $level->totalProfit = '27';
        $level->save();

        $level = new level();
        $level->level = 'level 2';
        $level->invest = '30';
        $level->dailyProfit = '1.2';
        $level->duration = '45';
        $level->totalProfit = '54';
        $level->save();

        $level = new level();
        $level->level = 'level 3';
        $level->invest = '70';
        $level->dailyProfit = '2.4';
        $level->duration = '45';
        $level->totalProfit = '108';
        $level->save();

        $level = new level();
        $level->level = 'level 4';
        $level->invest = '150';
        $level->dailyProfit = '5';
        $level->duration = '45';
        $level->totalProfit = '225';
        $level->save();

        $level = new level();
        $level->level = 'level 5';
        $level->invest = '320';
        $level->dailyProfit = '12';
        $level->duration = '45';
        $level->totalProfit = '540';
        $level->save();

        $level = new level();
        $level->level = 'level 6';
        $level->invest = '550';
        $level->dailyProfit = '20';
        $level->duration = '45';
        $level->totalProfit = '900';
        $level->save();

        // $level = new level();
        // $level->level = 'level 7';
        // $level->invest = '980';
        // $level->dailyProfit = '35';
        // $level->duration = '45';
        // $level->totalProfit = '1575';
        // $level->save();

        // $level = new level();
        // $level->level = 'level 8';
        // $level->invest = '1620';
        // $level->dailyProfit = '60';
        // $level->duration = '45';
        // $level->totalProfit = '2700';
        // $level->save();

        // $level = new level();
        // $level->level = 'level 9';
        // $level->invest = '2860';
        // $level->dailyProfit = '100';
        // $level->duration = '45';
        // $level->totalProfit = '4500';
        // $level->save();

        // $level = new level();
        // $level->level = 'level 10';
        // $level->invest = '4400';
        // $level->dailyProfit = '160';
        // $level->duration = '45';
        // $level->totalProfit = '7200';
        // $level->save();

        // inserting users

        $user = new User();
        $user->name = 'Admin';
        $user->referal = 'default';
        $user->balance = '0';
        $user->pin = '12345';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->referal = 'default';
        $user->pin = '12345';
        $user->balance = '50';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->status = 'approved';
        $user->save();
    }
}
