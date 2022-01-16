<?php

namespace App\Providers;

use App\Charts\GlobalQuizzes;
use App\Charts\MonthlyUsers;
use App\Charts\UserQuiz;
use ConsoleTVs\Charts\Registrar as Charts;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        $charts->register([
            UserQuiz::class,
            GlobalQuizzes::class,
            MonthlyUsers::class,
        ]);
    }
}
