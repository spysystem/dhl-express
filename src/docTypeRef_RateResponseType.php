<?php

namespace DHLExpress;

class docTypeRef_RateResponseType
{

	/**
	 * @var docTypeRef_ProviderType[] $Provider
	 */
	protected $Provider = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return docTypeRef_ProviderType[]
	 */
	public function getProvider()
	{
		return $this->Provider;
	}

	/**
	 * @param docTypeRef_ProviderType[] $Provider
	 * @return \DHLExpress\docTypeRef_RateResponseType
	 */
	public function setProvider(array $Provider = null)
	{
		$this->Provider = $Provider;
		return $this;
	}

}
