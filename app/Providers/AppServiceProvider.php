<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        Blade::directive('day', function ($expression) {
            return "<?php echo Carbon\Carbon::parse($expression)->format('d'); ?>";
        });

        Blade::directive('month', function ($expression) {
            return "<?php echo Carbon\Carbon::parse($expression)->format('F'); ?>";
        });

        Blade::directive('monthSimple', function ($expression) {
            return "<?php echo Carbon\Carbon::parse($expression)->format('M'); ?>";
        });

        Blade::directive('year', function ($expression) {
            return "<?php echo Carbon\Carbon::parse($expression)->format('Y'); ?>";
        });

        Blade::directive('date', function ($expression) {
            return "<?php echo Carbon\Carbon::parse($expression)->format('d F Y'); ?>";
        });

        Blade::directive('dateDay', function ($expression) {
            return "<?php echo Carbon\Carbon::parse($expression)->format('l, d F Y'); ?>";
        });

        Blade::directive('time', function ($expression) {
            return "<?php echo Carbon\Carbon::parse($expression)->format('H:i A'); ?>";
        });
    }
}
