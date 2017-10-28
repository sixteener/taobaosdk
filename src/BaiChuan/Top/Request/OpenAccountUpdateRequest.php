<?php
namespace Sixteener\TaoBaoSDK\BaiChuan\Top\Request;
/**
 * TOP API: taobao.open.account.update Request
 * 
 * @author auto create
 * @since 1.0, 2015.11.16
 */
use Sixteener\TaoBaoSDK\BaiChuan\Top\RequestCheckUtil;
class OpenAccountUpdateRequest
{
	/** 
	 * Open Account
	 **/
	private $paramList;
	
	private $apiParas = array();
	
	public function setParamList($paramList)
	{
		$this->paramList = $paramList;
		$this->apiParas["param_list"] = $paramList;
	}

	public function getParamList()
	{
		return $this->paramList;
	}

	public function getApiMethodName()
	{
		return "taobao.open.account.update";
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
