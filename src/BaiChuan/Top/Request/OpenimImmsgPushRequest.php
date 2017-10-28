<?php
namespace Sixteener\TaoBaoSDK\BaiChuan\Top\Request;
/**
 * TOP API: taobao.openim.immsg.push Request
 * 
 * @author auto create
 * @since 1.0, 2016.04.11
 */
use Sixteener\TaoBaoSDK\BaiChuan\Top\RequestCheckUtil;
class OpenimImmsgPushRequest
{
	/** 
	 * openim消息结构体
	 **/
	private $immsg;
	
	private $apiParas = array();
	
	public function setImmsg($immsg)
	{
		$this->immsg = $immsg;
		$this->apiParas["immsg"] = $immsg;
	}

	public function getImmsg()
	{
		return $this->immsg;
	}

	public function getApiMethodName()
	{
		return "taobao.openim.immsg.push";
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
