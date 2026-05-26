<?php namespace Gecche\Multidomain\Foundation\Bootstrap;

use Illuminate\Contracts\Foundation\Application;

class DetectDomain {

    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        $app->detectDomain();

        $storagePath = $app->domainStoragePath();
        $defaultStoragePath = rtrim($app->basePath('storage'), '\/');

        if ($storagePath !== $defaultStoragePath) {
            $app->useStoragePath($storagePath);
        }
    }

}
