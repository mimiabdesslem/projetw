<?PHP
class Historique{
	private $Reference;
	private $NomArticle;
	private $Marque;
	private $Prix;

	function __construct($NomArticle,$Marque,$Prix){
		$this->NomArticle=$NomArticle;
		$this->Marque=$Marque;
		$this->Prix=$Prix;


	}
	
	function getReference(){
		return $this->Reference;
	}
	function getNomArticle(){
		return $this->NomArticle;
	}
	function getMarque(){
		return $this->Marque;
	}
	function getPrix(){
		return $this->Prix;
	}

	function setReference($Reference){
		$this->Reference=$Reference;
	}
	function setNomArticle($NomArticle){
		$this->NomArticle=$NomArticle;
	}
	function setMarque($Marque){
		$this->Marque=$Marque;
	}
function setPrix($Prix){
		$this->Prix=$Prix;
	}
	
}

?>