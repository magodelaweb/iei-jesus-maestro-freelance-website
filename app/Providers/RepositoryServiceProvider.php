<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\ImageRepositoryInterface;
use App\Repositories\ImageRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerImageRepository();
    }
    public function boot()
    {
        //
    }
    protected function registerImageRepository(){
      $this->app->bind(
          ImageRepositoryInterface::class,
          ImageRepository::class
      );
    }
}
