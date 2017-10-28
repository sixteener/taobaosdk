<?php
namespace Sixteener\TaoBaoSDK\TBK\Top\Request;
/**
 * TOP API: taobao.tbk.coupon.get Request
 * 
 * @author auto create
 * @since 1.0, 2017.08.25
 */
use Sixteener\TaoBaoSDK\TBK\Top\RequestCheckUtil;
class TbkCouponGetRequest
{
	/** 
	 * 带券ID与商品ID的加密串
	 **/
	private $me;
	
	private $apiParas = array();
	
	public function setMe($me)
	{
		$this->me = $me;
		$this->apiParas["me"] = $me;
	}

	public function getMe()
	{
		return $this->me;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.coupon.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->me,"me");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
