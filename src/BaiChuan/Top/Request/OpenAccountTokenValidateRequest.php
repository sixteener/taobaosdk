<?php
namespace Sixteener\TaoBaoSDK\BaiChuan\Top\Request;
/**
 * TOP API: taobao.open.account.token.validate Request
 * 
 * @author auto create
 * @since 1.0, 2016.11.18
 */
use Sixteener\TaoBaoSDK\BaiChuan\Top\RequestCheckUtil;
class OpenAccountTokenValidateRequest
{
	/** 
	 * token
	 **/
	private $paramToken;
	
	private $apiParas = array();
	
	public function setParamToken($paramToken)
	{
		$this->paramToken = $paramToken;
		$this->apiParas["param_token"] = $paramToken;
	}

	public function getParamToken()
	{
		return $this->paramToken;
	}

	public function getApiMethodName()
	{
		return "taobao.open.account.token.validate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->paramToken,"paramToken");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
