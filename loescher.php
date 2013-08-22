<?php

include 'article.php';

$allArticles = new LoescherArticles();

class LoescherArticles
{
	public $articlesList = array();
	
	function __construct()
	{
		$newSchnaps = new Schnaps("2012-S-1","Alter Marc","2012","Bilder/Schnaps/thumbs/alter_marc.jpg",40,4.45,"Trester");
		$this->articlesList[$newSchnaps->Id] = $newSchnaps;
		$newSchnaps = new Schnaps("2012-S-2","Pflaeumli","2012","Bilder/Schnaps/thumbs/pflaeumli.jpg",40,4.45,"Pflaumen");
		$this->articlesList[$newSchnaps->Id] = $newSchnaps;
		$newSchnaps = new Schnaps("2012-S-3","Alter Boskop","2012","Bilder/Schnaps/thumbs/alter_boskop_brand.jpg",45,4.80,"Boskop");
		$this->articlesList[$newSchnaps->Id] = $newSchnaps;
	}
	
	function schnaepse()
	{
		$foundSchnaepse = array();
		
		foreach ($this->articlesList as $article)
		{
			if ($article instanceof Schnaps)
			{
				array_push($foundSchnaepse, $article);
			}
		}
		
		return $foundSchnaepse;
	}
	
	function get($articleId){
		return $this->articlesList[$articleId];
	}
}

//alter_boskop_brand.jpg
// apfelbrand.jpg
// birnenbrand.jpg
// himbeergeist.jpg
// mirabellenbrand.jpg
// pflaeumli.jpg
// riesling_tresterbrand.jpg
// traubenlikoer.jpg
// weinbergs_pfirsich_brand.jpg
// weinhefebrand.jpg
// zwetschgenwasser.jpg


?>