<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function($notifiable,$url){
            return(new MailMessage)
            ->greeting('Hola cinefilo !!!!')
            ->subject('Confirmación de cuenta en blog de Peliculas')
            ->line('Estas a un paso de formar parte del blog, por favor confirma tu cuenta dando clic en el siguiente botón')
            ->action('verificar cuenta',$url)
            ->line('Si no creaste ninguna cuenta, por favor ignora este correo')
            ->salutation('Saludos por parte de Blog peliculas');
        });
    }
}
