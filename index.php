<?php 
echo '<div>asddasdad</div>';
/*$foo = 100;

$foo >100 ? bark ('<li> greater than </li>') : bark ('<li> less than </li>');


function bark ($mes) {
echo $mes;
};



$arr = array();
array_push ($arr,'test');
$arr['mykey'] = 'pair';


$arr = array (
'foo' => 'kkk',
'bar' => array ('age' => 300)
)


);

echo $arr['mkey'];
var_dump ($arr);

*/
class Air_Craft {
private $amo = array();
function __construct () {
	$this->addAmo(100);
}

function getAmo() {
	return $this->amo;
}

function addAmo ($value) {
array_push ($this->amo,$value);
}

function fly () {
	echo 'reday when you are';
}

}

$ac = new Air_Craft ();
$ac->addAmo(1);
var_dump ($ac);



class Air_Craft_Carrier {
private $aircrafts = array ();
private $numofacs;

function __construct () {



}
private functio init () {
$this->accelerate();
$this->fillFuel();
$this-> assembleCrew();
$this->selfCheck();


}

public function accelerate ($knots) {

}

public function launchAirCrafts ($ac) {

}
public function prepareAirCrafts () {


}

public function loadAirCraft ($ac) {
	array_push ($this->aircrafts,$ac);
}
}


class Stealth_Air_Craft extends Air_Craft {
	function__constructs() {
		parent::__construct ();
	}

	public function engageStealth () {
		echo 'i am not visible by radar';
	}

}

$ac = new Stealth_Air_Craft();


'interface / implement'
$sac-> addAmo(1);
bark ($ac -> getAmo());
?>



Note: Children constructor overrides Parent constructor 
