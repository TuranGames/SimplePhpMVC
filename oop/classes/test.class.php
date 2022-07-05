<?php


class Test extends Dbh{
public $firstName;
public $secondName;
public $zaprosText;
public $executeText;
	public function __construct($database){
		 $this->database = $database;
	}
 
	public function select($value = NULL) {
		$mode = "select";
	if($value == NULL){
		$sql = "SELECT * FROM $this->database";
	}else {
		$resultArr = $this->generateSqlCode($value, $mode);
		$sql = "SELECT $resultArr FROM $this->database";
	}
	$this->zaprosText =  $sql;
		
	}

	public function WHERE($arr) {
		$mode = "select";
		$resultArr = $this->generateSqlCode($arr, $mode);
		$this->executeText = $resultArr['execute']; 
		$this->zaprosText = $this->zaprosText." WHERE $resultArr[zapros]";
		echo $this->zaprosText;
		
		 
	}


	protected function generateSqlCode($arr, $mode) {
		$i = 0;
		$baseText = "";
		$arrayLength = count($arr) - 1;
		$executeVal = array();
		//variables for insert
		$parameter = "(";
		$values = "(";

		if(array_keys($arr) === range(0, $arrayLength))     // checking array whether is assotiative or sequential
		{    
			foreach ($arr as $val) {
				
				if($arrayLength != $i){
		          $baseText = $baseText.$val." , ";
		 		}else{
				  $baseText = $baseText.$val;
				}
			$i++;
			}
				$result = $baseText;
		}else{
			foreach ($arr as $key => $value) {
					$executeVal += [ "$key" => $value ];
				if($arrayLength != $i){
					switch ($mode) {
						case 'select':
							$baseText = $baseText.$key." = :".$key." AND ";
							break;
						case 'update':
							$baseText = $baseText.$key." = :".$key." , ";
							break;
						case 'insert':
							$parameter = $parameter.$key.", ";
							$values = $values.":".$key.", ";;
							
							break;
						
						default:
							# code...
							break;
					}

				}else{
						switch ($mode) {
						case 'select':
							 $baseText = $baseText.$key." = :".$key;
							break;
						case 'update':
							$baseText = $baseText.$key." = :".$key;
							break;
						case 'insert':
							$parameter = $parameter.$key.")";
							$values = $values.":".$key.")";
							$baseText = $parameter." VALUES ".$values;
							break;
						
						default:
							# code...
							break;
					}
				 
				}
			$i++;
			}
			$result = array("zapros" => $baseText, "execute" => $executeVal);
		}
			
		
		return $result;
	
	}

	public function query () {
		$stmt = $this->connect()->prepare($this->zaprosText);
		$stmt->execute($this->executeText);
		while($row = $stmt->fetch()) {
			echo $row['firstName'];
		}
	}

}