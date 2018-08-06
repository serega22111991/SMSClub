<?
namespace app\models;

use yii\base\Model;
	
class TwoFA extends Model   {
	
	public function getTwoFA($name) {
		$abonent = $name;
	//	echo $abonent;
	
		$abonent = $name;
		$login = '38096765865*';    // string User ID (phone number)
		$password = 'serega32147222';        // string Password
		$alphaName = 'VashZakaz';        // string, sender id (alpha-name) (as long as your alpha-name is not spelled out, it is necessary to use it)
		$abonent = '380967658654';
		$text = iconv('utf-8','windows-1251', 'СМС через XML-шлюз от SMS CLUB');
		$text = urlencode($text);       // string Message
			
		$xml = "<?xml version='1.0' encoding='utf-8'?><request_sendsms><username><![CDATA[".$login."]]></username><password><![CDATA[".$password."]]></password><from><![CDATA[".$alphaName."]]></from><to><![CDATA[".$abonent."]]></to><text><![CDATA[".$text."]]></text></request_sendsms>";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: text/xml; charset=utf-8'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CRLF, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
		curl_setopt($ch, CURLOPT_URL, 'https://gate.smsclub.mobi/xml/');
		$result = curl_exec($ch);
		curl_close($ch);
		
		return $result;
		//echo $result;
	}	
	

}

?>