<?php
namespace Sixteener\TaoBaoSDK\BaiChuan\Top\Request;
/**
 * TOP API: taobao.baichuan.user.logindoublecheck Request
 * 
 * @author auto create
 * @since 1.0, 2015.06.10
 */
use Sixteener\TaoBaoSDK\BaiChuan\Top\RequestCheckUtil;
class BaichuanUserLogindoublecheckRequest
{
	/** 
	 * name
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getApiMethodName()
	{
		return "taobao.baichuan.user.logindoublecheck";
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
