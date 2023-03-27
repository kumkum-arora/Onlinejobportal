<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\CandidateInterface;
use App\Repositories\CandidateRepository;
use App\Interfaces\AdminInterface;
use App\Repositories\AdminRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    // Register services.
    public function register()
    {
        //Bind Interface and Repository class together

        //for Candidate Controller
        $this->app->bind(CandidateInterface::class, CandidateRepository::class);

         //for Admin Controller
         $this->app->bind(AdminInterface::class, AdminRepository::class);
    }
}