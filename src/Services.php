<?php

namespace DHLExpress;

/**
 * Class Services
 *
 * @package DHLExpress
 */
class Services
{

	/**
	 * @var Service[] $Service
	 */
	protected $Service;

	/**
	 * @param Service[] $Service
	 */
	public function __construct(array $Service)
	{
		$this->Service = $Service;
	}

	/**
	 * @return Service[]
	 */
	public function getService()
	{
		return $this->Service;
	}

	/**
	 * @param Service[] $Service
	 * @return \DHLExpress\Services
	 */
	public function setService(array $Service)
	{
		$this->Service = $Service;
		return $this;
	}

}
