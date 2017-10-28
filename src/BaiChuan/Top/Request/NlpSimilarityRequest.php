<?php
namespace Sixteener\TaoBaoSDK\BaiChuan\Top\Request;
/**
 * TOP API: taobao.nlp.similarity Request
 * 
 * @author auto create
 * @since 1.0, 2016.01.12
 */
use Sixteener\TaoBaoSDK\BaiChuan\Top\RequestCheckUtil;
class NlpSimilarityRequest
{
	/** 
	 * 多文本内容
	 **/
	private $texts;
	
	private $apiParas = array();
	
	public function setTexts($texts)
	{
		$this->texts = $texts;
		$this->apiParas["texts"] = $texts;
	}

	public function getTexts()
	{
		return $this->texts;
	}

	public function getApiMethodName()
	{
		return "taobao.nlp.similarity";
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
