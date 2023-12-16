<?php

namespace App\Providers;

// Models

use App\Models\Pengaturan;
use App\Models\Kategori;
use App\Models\Jurusan;
use App\Models\Pengumuman;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
        config(['app.locale' => 'id']);
        \Carbon\Carbon::setLocale('id');
        $post = Pengaturan::first();
        $post->visit()->withIp();

        try {
            view()->share([
                'pengaturan' => Pengaturan::first(),
                'kategori' => Kategori::get(),
                'jurusan' => Jurusan::get(),
                'pengumuman' => Pengumuman::orderByDesc('id')->get()
            ]);
        } catch (\Exception $e) {
        }
    }
}
