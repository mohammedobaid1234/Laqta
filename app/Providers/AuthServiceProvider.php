<?php

namespace App\Providers;

use App\Models\Rule;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        foreach (config('abilities') as $key => $value) {
            Gate::define($key, function ($user) use ($key) {
                $rules = Rule::whereRaw('id IN (SELECT rule_id FROM rule_user WHERE user_id = ?)', [
                    $user->id,
                ])->get();
                foreach ($rules as $rule) {

                    if (in_array($key, $rule->abilities)) {
                        return true;
                    }
                }
                return false;
            });
        }
    }
}
