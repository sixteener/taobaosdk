<?php
namespace Sixteener\TaoBaoSDK\BaiChuan\Top\Request;
/**
 * TOP API: taobao.openim.custmsg.push Request
 * 
 * @author auto create
 * @since 1.0, 2016.04.11
 */
use Sixteener\TaoBaoSDK\BaiChuan\Top\RequestCheckUtil;
class OpenimCustmsgPushRequest
{
	/** 
	 * 自定义消息内容
	 **/
	private $custmsg;
	
	private $apiParas = array();
	
	public function setCustmsg($custmsg)
	{
		$this->custmsg = $custmsg;
		$this->apiParas["custmsg"] = $custmsg;
	}

	public function getCustmsg()
	{
		return $this->custmsg;
	}

	public function getApiMethodName()
	{
		return "taobao.openim.custmsg.push";
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