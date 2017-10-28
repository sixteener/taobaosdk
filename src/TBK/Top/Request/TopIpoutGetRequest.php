<?php
namespace Sixteener\TaoBaoSDK\TBK\Top\Request;
/**
 * TOP API: taobao.Top.ipout.get Request
 * 
 * @author auto create
 * @since 1.0, 2017.07.31
 */
class TopIpoutGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.Top.ipout.get";
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
