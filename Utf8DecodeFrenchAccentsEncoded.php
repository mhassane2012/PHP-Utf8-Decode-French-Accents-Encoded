<?php
/**
* Class Utf8DecodeFrenchAccentsEncoded 
* 
* Decode UTF8 encoded strings for French special characters.
*
* @param   string  $str  UTF8 encoded data to decode.
* @return  string  decode with accented characters.
* @access  public
* @version 1.0 / 2021-02-04
* @author  Hassane Moussa <mhassane2012@gmail.com>
* @ Niger / Niamey
*/
class Utf8DecodeFrenchAccentsEncoded  
{
    private 
	
	$stringFr ="",
	$frenchAccentsEncodedUtf8=array(),
	$frenchSpecialCharacters=array(),
	$msg = "The encoding of string is not UTF-8";
	
	/**
    *  This Boolean Function check if encoding of string is UTF-8 or no.
    *  Detects character encoding	in string
    */
	public function is_utf8($string) {
		
		$this->stringFr = $string;
		return (mb_detect_encoding($this->stringFr)=="UTF-8"? 'true' : 'false');

	}
	
	/**
    *  This Function use the php preg_replace function to decode utf8 encoded French Accents characters. 
    */	
	public function fr_utf8_decode_with_preg_replace($string){
				
		if($this->is_utf8($string)=='true'){
			
			$this->stringFr = $string;	
			$this->frenchAccentsEncodedUtf8 = array('/Ã /','/Ã¢/','/Ã©/','/Ã¨/','/Ãª/','/Ã«/','/Ã®/','/Ã¯/','/Ã´/','/Ã¶/','/Ã¹/','/Ã»/','/Ã¼/','/Ã§/','/Å/','/â¬/','/Â°/','/Ã/','/Ã/','/Ã/','/Ã/','/Ã/','/Ã/','/Ã/','/Ã/','/Ã/','/Ã/','/Ã/','/Ã/','/Ã/','/Å/');
			$this->frenchSpecialCharacters = array('à','â','é','è','ê','ë','î','ï','ô','ö','ù','û','ü','ś','œ','€','°','À','Â','É','Ê','Ë','Î','Ï','Ô','Ö','Ù','Û','Ü','Ç','Œ');
			$this->stringFr = preg_replace($this->frenchAccentsEncodedUtf8, $this->frenchSpecialCharacters, $this->stringFr);
		}else{
			$this->stringFr = $this->msg;
		}
		
		return $this->stringFr;
	}
	
	/**
    *  This Function use the php str_replace function to decode utf8 encoded French Accents characters. 
    */
	public function fr_utf8_decode_str_replace($string) {
				
		if($this->is_utf8($string)=='true'){
			
			$this->stringFr = $string;
			$this->stringFr = str_replace("Ã ", 'à', $this->stringFr);
			$this->stringFr = str_replace("Ã¢", 'â', $this->stringFr);
			$this->stringFr = str_replace("Ã©", 'é', $this->stringFr);
			$this->stringFr = str_replace("Ã¨", 'è', $this->stringFr);
			$this->stringFr = str_replace("Ãª", 'ê', $this->stringFr);
			$this->stringFr = str_replace("Ã«", 'ë', $this->stringFr);
			$this->stringFr = str_replace("Ã®", 'î', $this->stringFr);
			$this->stringFr = str_replace("Ã¯", 'ï', $this->stringFr);
			$this->stringFr = str_replace("Ã´", 'ô', $this->stringFr);
			$this->stringFr = str_replace("Ã¶", 'ö', $this->stringFr);
			$this->stringFr = str_replace("Ã¹", 'ù', $this->stringFr);
			$this->stringFr = str_replace("Ã»", 'û', $this->stringFr);
			$this->stringFr = str_replace("Ã¼", 'ü', $this->stringFr);
			$this->stringFr = str_replace("Ã§", 'ś', $this->stringFr);
			$this->stringFr = str_replace("Å", 'œ', $this->stringFr);
			$this->stringFr = str_replace("â¬", '€', $this->stringFr);
			$this->stringFr = str_replace("Â°", '°', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'À', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Â', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'É', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Ê', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Ë', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Î', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Ï', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Ô', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Ö', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Ù', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Û', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Ü', $this->stringFr);
			$this->stringFr = str_replace("Ã", 'Ç', $this->stringFr);
			$this->stringFr = str_replace("Å", 'Œ', $this->stringFr);
		}else{
			$this->stringFr = $this->msg;
		}
			return $this->stringFr;
	}
	
	
	
	
}

?>