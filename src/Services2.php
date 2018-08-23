<?php

namespace DHLExpress;

/**
 * Class Services2
 *
 * @package DHLExpress
 */
class Services2
{

	/**
	 * @var Service2[] $Service
	 */
	protected $Service;

	/**
	 * @param Service2[] $Service
	 */
	public function __construct(array $Service)
	{
		$this->Service = $Service;
	}

	/**
	 * @return Service2[]
	 */
	public function getService()
	{
		return $this->Service;
	}

	/**
	 * @param Service2[] $Service
	 * @return \DHLExpress\Services2
	 */
	public function setService(array $Service)
	{
		$this->Service = $Service;
		return $this;
	}

}
