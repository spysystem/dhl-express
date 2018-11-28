<?php
namespace DHLExpress;


/**
 * Class RequestType
 */
class RequestType
{

	/**
	 * @var null|ServiceHeaderType $ServiceHeader
	 */
	protected $ServiceHeader;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|ServiceHeaderType
	 */
	public function getServiceHeader(): ?ServiceHeaderType
	{
		return $this->ServiceHeader;
	}

	/**
	 * @param null|ServiceHeaderType $ServiceHeader
	 * @return RequestType
	 */
	public function setServiceHeader(?ServiceHeaderType $ServiceHeader = null): RequestType
	{
		$this->ServiceHeader = $ServiceHeader;
		return $this;
	}

}
