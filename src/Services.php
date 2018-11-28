<?php
namespace DHLExpress;


/**
 * Class Services
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
	public function getService(): ?array
	{
		return $this->Service;
	}

	/**
	 * @param Service[] $Service
	 * @return Services
	 */
	public function setService(array $Service): Services
	{
		$this->Service = $Service;
		return $this;
	}

}
