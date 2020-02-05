<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
        public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('GRUPO MARKAT');
            $event->menu->add([                
                    'text'    => 'Telhas Império',
                    'icon'    => 'fas fa-fw fa-home',
                    'submenu' => [
                        [
                            'text' => 'Produtos',
                            'url'  => route('produtos.index'),
                        ],
                        [
                            'text'    => 'level_one',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_two',
                                    'url'  => '#',
                                ],
                                [
                                    'text'    => 'level_two',
                                    'url'     => '#',
                                    'submenu' => [
                                        [
                                            'text' => 'level_three',
                                            'url'  => '#',
                                        ],
                                        [
                                            'text' => 'level_three',
                                            'url'  => '#',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'text' => 'level_one',
                            'url'  => '#',
                        ],
                    ],                
            ]);
            $event->menu->add([
                'text'    => 'Markat Engenharia',
                'icon'    => 'fas fa-fw fa-briefcase',
                'submenu' => [
                    [
                        'text' => 'Produtos',
                        'url'  => '#',
                    ],
                    [
                        'text'    => 'level_one',
                        'url'     => '#',
                        'submenu' => [
                            [
                                'text' => 'level_two',
                                'url'  => '#',
                            ],
                            [
                                'text'    => 'level_two',
                                'url'     => '#',
                                'submenu' => [
                                    [
                                        'text' => 'level_three',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'level_three',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'text' => 'level_one',
                        'url'  => '#',
                    ],
                ],
            ]);
            $event->menu->add('CONFIGURAÇÕES');
            $event->menu->add([
                'text' => 'Usuários',
                'url'  => 'admin/settings',
                'icon' => 'fas fa-fw fa-user',
            ],
            [
                'text' => 'Alterar senha',
                'url'  => 'admin/settings',
                'icon' => 'fas fa-fw fa-lock',
            ]);
        });
    }
    
}
