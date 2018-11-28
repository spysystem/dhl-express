<?php
namespace DHLExpress;


/**
 * Class Services2
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
	public function getService(): ?array
	{
		return $this->Service;
	}

	/**
	 * @param Service2[] $Service
	 * @return Services2
	 */
	public function setService(array $Service): Services2
	{
		$this->Service = $Service;
		return $this;
	}

}
