<?php
namespace Sixteener\TaoBaoSDK\TBK\Top\Request;
/**
 * TOP API: taobao.httpdns.get Request
 * 
 * @author auto create
 * @since 1.0, 2017.08.31
 */
use Sixteener\TaoBaoSDK\TBK\Top\RequestCheckUtil;
class HttpdnsGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.httpdns.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
