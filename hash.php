<?
	function charTranslate($string){

		$arrString = str_split($string);
		for ($i=0; $i < count($arrString); $i++) { 
			$arrString[$i] = ord($arrString[$i]);
		}
		$strNew = implode("", $arrString);
		return $strNew;
	}

	function translate($number) {
		//$actnumber -> промежуточный результат деления
		$actNumber = $number;
		$j = 0;
		while ($actNumber > 18) {
			$actNumber = $actNumber / 18;
			$arrOstatoc[$j] = $number % 18;
			$j++;	
		}
		//implode("", $ostatoc);
		return $arrOstatoc;
	}

	function transform10cc16cc($strNew){

		if ((strlen($strNew) % 2) == 0) {
			$arrString = str_split($strNew);
			/*
				пока что я пишу код только для перевода
				1 элемента, а планируется если четное то по 2
			*/
			for ($i=0; $i < count($arrString); $i++) { 
				$arrString[$i] = translate($arrString[$i]);				
			}
			$strNew = implode("", $arrString);		
		} 
	}

	function heshMain($string){

		$strNew = charTranslate($string);
		//$strNew = transform10cc16cc($strNew);
		return $strNew;
	}
?>
