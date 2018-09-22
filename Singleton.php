<?
class App{
    private $id = null;

    private static $instance = null;

    private function __construct(){}
    private function __clone(){}

    public function setId($id){
       $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}


$app1 = App::getInstance();
$app1->setId(1);
var_dump($app1);
?>
<hr></hr>
<?
echo $app1->getId();
?>
    <hr></hr>
<?
$app2 = App::getInstance();
$app2->setId(2);
var_dump($app2);
?>
    <hr></hr>
<?
echo $app2->getId();

?>
    <hr>
<?
var_dump($app1);
