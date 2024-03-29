<?php /** 
* Generated by
* 
*      _____ _          __  __      _     _
*     / ____| |        / _|/ _|    | |   | |
*    | (___ | | ____ _| |_| |_ ___ | | __| | ___ _ __
*     \___ \| |/ / _` |  _|  _/ _ \| |/ _` |/ _ \ '__|
*     ____) |   < (_| | | | || (_) | | (_| |  __/ |
*    |_____/|_|\_\__,_|_| |_| \___/|_|\__,_|\___|_|
*
* The code generator that works in many programming languages
*
*			https://www.skaffolder.com
*
*
* You can generate the code from the command-line
*       https://npmjs.com/package/skaffolder-cli
*
*       npm install -g skaffodler-cli
*
*   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *
*
* To remove this comment please upgrade your plan here: 
*      https://app.skaffolder.com/#!/upgrade
*
* Or get up to 70% discount sharing your unique link:
*       https://app.skaffolder.com/#!/register?friend=5dcbeb5df1ef4518a538313b
*
* You will get 10% discount for each one of your friends
* 
*/
?>
<?php
require_once 'lib/Slim/Middleware.php';

/*
 * Authentication Middleware
 */
class Security extends \Slim\Middleware
{
    public function call()
    {
    	$app = $this->app;

		$response = $app->response();
		$response->header('Access-Control-Allow-Origin', '*');
    	$response->header('Access-Control-Allow-Headers', 'Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept, pass, user');
    	$response->header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE,OPTIONS,PATH');
		$response->header('Access-Control-Allow-Credentials', 'true');
		$response->header('Access-Control-Allow-Origin-param', '*');

		if($app->request()->getMethod() == 'OPTIONS')
			return;
		
    	$app->response->headers->set('Content-Type', 'application/json');

		/*

    	//Get headers variable of HTTP request
    	$params= array(
    			'user' => $app->environment['HTTP_USER'],
    			'pass' => $app->environment['HTTP_PASS'],
    	);

    	//seach user in DB
    	$query = "select * FROM user WHERE user=:user AND pass=:pass LIMIT 1";
    	$userLogged = makeQuery( $query, $params, false);
    	
    	if (isset($userLogged->_id))
    	{
			//User logged
    		if (isset($userLogged->_id))
    		{
    			//set user for use in services
    			$app->response()->userLogged = $userLogged;
    		}
    		$this->next->call();
    	}
    	else
    	{
    		//user not logged
    		$response = array ('error' => '401 Unauthorized');
    		if ( $app->request()->getResourceUri() == "/Login")
    			$response['disableError'] = true;
    		
    		echo json_encode($response);
    		$app->response()->status(401);
    	}

		*/

    }
}
?>