<?php

	function GetShoppingCart(){
		session_start();
		if (!array_key_exists('SHOPPING_CART', $_SESSION)){
			$_SESSION['SHOPPING_CART'] = new ShoppingCart();
		}
		return $_SESSION['SHOPPING_CART'];
	}
	
	class ShoppingCart{

		public $Articles = array();
		
		public function addArticle($articleId, $count){
			$this->Articles[$articleId] = $count;
		}
		
		public function removeArticle($articleId){
			unset($this->Articles[$articleId]);
		}
		
		public function changeArticle($articleId, $inc){
			foreach ( $this->Articles as $currentArticleId => &$currentCount ){
				if ($articleId == $currentArticleId){
					$currentCount += $inc;
				}
			}
		}
		
		public function containsArticle($articleId){
			return array_key_exists($articleId, $this->Articles);
		}
		
		public function getArticleCount($articleId){
			foreach ( $this->Articles as $currentArticleId => &$currentCount ){
				if ($articleId == $currentArticleId)
					return $currentCount;
			}
			return 0;
		}
	}
?>