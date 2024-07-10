<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

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
        //
        VerifyEmail::toMailUsing(function($notifable, $url){
            return (new MailMessage)
            ->greeting('¡Hola!')
            ->subject('Verifica tu dirección de email')
            ->line('Da clic en el boton para poder verificar tu cuenta')
            ->action('Verifica tu email para continuar', $url)
            ->line('Gracias por usar nuestro software');
        });
    }
}
