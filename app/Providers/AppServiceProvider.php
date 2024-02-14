<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Contracts\NoteRepositoryInterface;
use App\Repositories\NoteRepository;
use App\Contracts\NoteServiceInterface;
use App\Services\NoteService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(NoteRepositoryInterface::class, NoteRepository::class);
        $this->app->bind(NoteServiceInterface::class, NoteService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
