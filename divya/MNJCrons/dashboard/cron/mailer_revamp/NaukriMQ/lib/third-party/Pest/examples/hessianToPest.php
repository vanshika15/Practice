Inbox service migration from hessian to pest

At client side

During hessian call
public function __call($method, $args) {
        try {
          if (!$this->service) { 
          $this->service = new HessianClient($this->serviceUrl);
          } 
          return call_user_func_array(array($this->service, $method), $args);
          }
          catch(Exception$e) {
          throw $e;
          }
} 

Using Pest
public function __call($method, $args) {
	try{
		$pest = PestFactory::getInstance()->getPestManager(5,10);
		$response = $pest->post($this->serviceUrl, array("arg"=>serialize($args), "method"=>$method));
	}catch(Exception $e){
		throw $e;
	}
	return unserialize($response);
}


----------------------------------------------------------------------------------------------

At service side:
using hessian
require_once("./configs/InboxConfigs.php");
include_once(APP_DIR.'/lib/third-party/HessianPHPLib/HessianService.php');
$wrapper = &new HessianService();
$wrapper->registerObject(new InboxService());
$wrapper->service();



using pest
require_once("./configs/InboxConfigs.php");
$method =  $_POST["method"];
$arg = unserialize($_POST["arg"]);
try{
    $a = new InboxService();
    $aa= call_user_func_array(array($a, $method), $arg);
}catch(Exception $e){
    echo $e->getMessage();
}
echo serialize($aa);
