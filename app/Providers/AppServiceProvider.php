<?php

namespace harmoniKarimunJawa\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @param UrlGenerator $url
	 *
	 * @return void
	 */
    public function boot(UrlGenerator $url)
    {
        Schema::defaultStringLength(191);

	    if (App::environment(['production', 'staging'])) {
		    $url->forceScheme('https');
	    }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
