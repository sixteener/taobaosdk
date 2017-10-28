<?php
namespace Sixteener\TaoBaoSDK\BaiChuan\Top\Request;
/**
 * TOP API: taobao.openim.tribe.expel Request
 * 
 * @author auto create
 * @since 1.0, 2015.08.26
 */
use Sixteener\TaoBaoSDK\BaiChuan\Top\RequestCheckUtil;
class OpenimTribeExpelRequest
{
	/** 
	 * 用户信息
	 **/
	private $member;
	
	/** 
	 * 群id
	 **/
	private $tribeId;
	
	/** 
	 * 用户信息
	 **/
	private $user;
	
	private $apiParas = array();
	
	public function setMember($member)
	{
		$this->member = $member;
		$this->apiParas["member"] = $member;
	}

	public function getMember()
	{
		return $this->member;
	}

	public function setTribeId($tribeId)
	{
		$this->tribeId = $tribeId;
		$this->apiParas["tribe_id"] = $tribeId;
	}

	public function getTribeId()
	{
		return $this->tribeId;
	}

	public function setUser($user)
	{
		$this->user = $user;
		$this->apiParas["user"] = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getApiMethodName()
	{
		return "taobao.openim.tribe.expel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tribeId,"tribeId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
