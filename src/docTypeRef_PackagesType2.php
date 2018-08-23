<?php

namespace DHLExpress;

/**
 * Class docTypeRef_PackagesType2
 *
 * @package DHLExpress
 */
class docTypeRef_PackagesType2
{

	/**
	 * @var docTypeRef_RequestedPackagesType2[] $RequestedPackages
	 */
	protected $RequestedPackages;

	/**
	 * @param docTypeRef_RequestedPackagesType2[] $RequestedPackages
	 */
	public function __construct(array $RequestedPackages)
	{
		$this->RequestedPackages = $RequestedPackages;
	}

	/**
	 * @return docTypeRef_RequestedPackagesType2[]
	 */
	public function getRequestedPackages()
	{
		return $this->RequestedPackages;
	}

	/**
	 * @param docTypeRef_RequestedPackagesType2[] $RequestedPackages
	 * @return \DHLExpress\docTypeRef_PackagesType2
	 */
	public function setRequestedPackages(array $RequestedPackages)
	{
		$this->RequestedPackages = $RequestedPackages;
		return $this;
	}

}
