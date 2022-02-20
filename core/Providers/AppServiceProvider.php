<?php

namespace Core\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Date::use(CarbonImmutable::class);
    }

    public function boot(): void
    {
        Relation::enforceMorphMap([]);
        Model::preventLazyLoading(!$this->app->isProduction());
    }
}
