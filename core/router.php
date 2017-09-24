<?php 
/**
* defines the class of the router; basically I'm never doing this again, like ever.
*/
class Router {
	protected $routes = [];

	public static function load($file) {

		$router = new static;
		require $file;
		return $router;
		
	}

	public function define($routes) {
		$this->routes = $routes;
			
		}

	public function direct($url)
	{
		if (array_key_exists($url, $this->routes)) {
			return $this->routes[$url];
		}
		throw new Exception("Error, no route defined for this url", 1);
		
	}
}



 ?>