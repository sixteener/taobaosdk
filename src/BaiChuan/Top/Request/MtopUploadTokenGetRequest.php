<?php
namespace Sixteener\TaoBaoSDK\BaiChuan\Top\Request;
/**
 * TOP API: taobao.mtop.upload.token.get Request
 * 
 * @author auto create
 * @since 1.0, 2015.05.25
 */
use Sixteener\TaoBaoSDK\BaiChuan\Top\RequestCheckUtil;
class MtopUploadTokenGetRequest
{
	/** 
	 * 系统自动生成
	 **/
	private $paramUploadTokenRequest;
	
	private $apiParas = array();
	
	public function setParamUploadTokenRequest($paramUploadTokenRequest)
	{
		$this->paramUploadTokenRequest = $paramUploadTokenRequest;
		$this->apiParas["param_upload_token_request"] = $paramUploadTokenRequest;
	}

	public function getParamUploadTokenRequest()
	{
		return $this->paramUploadTokenRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.mtop.upload.token.get";
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
