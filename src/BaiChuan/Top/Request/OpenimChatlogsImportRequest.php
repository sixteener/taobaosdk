<?php
namespace Sixteener\TaoBaoSDK\BaiChuan\Top\Request;
/**
 * TOP API: taobao.openim.chatlogs.import Request
 * 
 * @author auto create
 * @since 1.0, 2015.12.31
 */
use Sixteener\TaoBaoSDK\BaiChuan\Top\RequestCheckUtil;
class OpenimChatlogsImportRequest
{
	/** 
	 * 消息序列
	 **/
	private $messages;
	
	private $apiParas = array();
	
	public function setMessages($messages)
	{
		$this->messages = $messages;
		$this->apiParas["messages"] = $messages;
	}

	public function getMessages()
	{
		return $this->messages;
	}

	public function getApiMethodName()
	{
		return "taobao.openim.chatlogs.import";
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
