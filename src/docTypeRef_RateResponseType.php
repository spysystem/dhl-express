<?php
namespace DHLExpress;


/**
 * Class docTypeRef_RateResponseType
 */
class docTypeRef_RateResponseType
{

	/**
	 * @var null|docTypeRef_ProviderType[]|docTypeRef_ProviderType $Provider
	 */
	protected $Provider;

	
	public function __construct()
	{
	
	}

	/**
	 * @return null|docTypeRef_ProviderType[]|docTypeRef_ProviderType
	 */
	public function getProvider()
	{
		return $this->Provider;
	}

	/**
	 * @param null|docTypeRef_ProviderType[]|docTypeRef_ProviderType $Provider
	 * @return docTypeRef_RateResponseType
	 */
	public function setProvider($Provider = null): docTypeRef_RateResponseType
	{
		$this->Provider = $Provider;
		return $this;
	}

}
