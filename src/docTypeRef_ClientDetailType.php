<?php

namespace DHLExpress;

/**
 * Class docTypeRef_ClientDetailType
 *
 * @package DHLExpress
 */
class docTypeRef_ClientDetailType
{

	/**
	 * @var string $sso
	 */
	protected $sso;

	/**
	 * @var string $plant
	 */
	protected $plant;

	
	public function __construct()
	{
	
	}

	/**
	 * @return string
	 */
	public function getSso()
	{
		return $this->sso;
	}

	/**
	 * @param string $sso
	 * @return \DHLExpress\docTypeRef_ClientDetailType
	 */
	public function setSso($sso)
	{
		$this->sso = $sso;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPlant()
	{
		return $this->plant;
	}

	/**
	 * @param string $plant
	 * @return \DHLExpress\docTypeRef_ClientDetailType
	 */
	public function setPlant($plant)
	{
		$this->plant = $plant;
		return $this;
	}

}
