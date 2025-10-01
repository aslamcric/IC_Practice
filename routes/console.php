<?php

use App\Jobs\BirthdayReminderJob;
use App\Jobs\SaleReportMailerJob;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Class 31 Hasin Hyder

// Artisan::command('hello', function () {
//     // $this->comment('From Artisan');
//     Log::info('Info From Laravel Log');
//     Log::error('This is shows Log Error. Time '.now());
// })->purpose('Welcome Users');

// Schedule::call(function(){
//     echo('Welcome to Laravel Scheduling!');
// })->everyMinute();

// Schedule::command('hello')->everyMinute();

// Schedule::job(new BirthdayReminderJob)->everyMinute()->name('Only for Guest');
// Schedule::job(new BirthdayReminderJob('Aslam'))->everyMinute()->name('Only for Aslam');

// Schedule::job(new SaleReportMailerJob)->everyMinute()->runInBackground();
// Schedule::job(new SaleReportMailerJob)->everyMinute()->withoutOverlapping();
// Schedule::call(function(){})->onOneServer();

// End Class 31 Hasin Hyder