<?php

namespace App\Providers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        $this->registerRedirectMacros();
        $this->registerBladeDirectives();
    }

    protected function registerRedirectMacros()
    {
        RedirectResponse::macro('withAjax', function (?int $statusCode = null) {
            if (! request()->ajax()) {
                return $this;
            }

            if ($statusCode) {
                $this->setStatusCode($statusCode);
            }

            $response = ['success' => $this->isSuccessful(), 'redirect' => $this->getTargetUrl()];

            if (session()->has('notification')) {
                $response['notification'] = session()->pull('notification');
                session()->forget('notification');
            }

            return response($response, $this->getStatusCode());
        });

        RedirectResponse::macro('ok', function () {
            if (! request()->ajax()) {
                return $this;
            }

            $this->setStatusCode(Response::HTTP_OK);

            return $this;
        });

        RedirectResponse::macro('created', function () {
            if (! request()->ajax()) {
                return $this;
            }

            $this->setStatusCode(Response::HTTP_CREATED);

            return $this;
        });

        RedirectResponse::macro('badRequest', function () {
            if (! request()->ajax()) {
                return $this;
            }

            $this->setStatusCode(Response::HTTP_BAD_REQUEST);

            return $this;
        });

        RedirectResponse::macro('forbidden', function () {
            if (! request()->ajax()) {
                return $this;
            }

            $this->setStatusCode(Response::HTTP_FORBIDDEN);

            return $this;
        });

        RedirectResponse::macro('error', function () {
            if (! request()->ajax()) {
                return $this;
            }

            $this->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);

            return $this;
        });
    }

    protected function registerBladeDirectives()
    {
        Blade::directive('route', function ($arguments) {
            return "<?php echo route({$arguments}); ?>";
        });
    }
}
