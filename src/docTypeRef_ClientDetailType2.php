<?php

namespace DHLExpress;

class docTypeRef_ClientDetailType2
{

	/**
	 * @var sso $sso
	 */
	protected $sso = null;

	/**
	 * @var plant $plant
	 */
	protected $plant = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return sso
	 */
	public function getSso()
	{
		return $this->sso;
	}

	/**
	 * @param sso $sso
	 * @return \DHLExpress\docTypeRef_ClientDetailType2
	 */
	public function setSso($sso)
	{
		$this->sso = $sso;
		return $this;
	}

	/**
	 * @return plant
	 */
	public function getPlant()
	{
		return $this->plant;
	}

	/**
	 * @param plant $plant
	 * @return \DHLExpress\docTypeRef_ClientDetailType2
	 */
	public function setPlant($plant)
	{
		$this->plant = $plant;
		return $this;
	}

}
