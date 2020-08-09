<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Table;
use App\Company;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $tables=Table::all();
        $company=Company::find(1);
        View::share('company',$company);
        View::share('tables',$tables);
    }
}
