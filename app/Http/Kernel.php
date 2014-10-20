<?php namespace App\Http;

use Exception;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The bootstrap classes for the application.
	 *
	 * @return void
	 */
	protected $bootstrappers = [
		'Illuminate\Foundation\Bootstrap\LoadEnvironment',
		'Illuminate\Foundation\Bootstrap\HandleExceptions',
		'Illuminate\Foundation\Bootstrap\LoadConfiguration',
		'Illuminate\Foundation\Bootstrap\RegisterProviders',
		'Illuminate\Foundation\Bootstrap\BootProviders',
	];

	/**
	 * The application's HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $stack = [
		'App\Http\Middleware\MaintenanceMiddleware',
		'Illuminate\Cookie\Middleware\Guard',
		'Illuminate\Cookie\Middleware\Queue',
		'Illuminate\Session\Middleware\Reader',
		'Illuminate\Session\Middleware\Writer',
		'Illuminate\View\Middleware\ErrorBinder',
		'App\Http\Middleware\CsrfMiddleware',
	];

	/**
	 * Handle an incoming HTTP request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function handle($request)
	{
		try
		{
			return parent::handle($request);
		}
		catch (Exception $e)
		{
			throw $e;
		}
	}

}
