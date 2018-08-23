<?php

namespace DHLExpress;

/**
 * Class docTypeRef_PackagesType
 *
 * @package DHLExpress
 */
class docTypeRef_PackagesType
{

	/**
	 * @var docTypeRef_RequestedPackagesType $RequestedPackages
	 */
	protected $RequestedPackages;

	/**
	 * @param docTypeRef_RequestedPackagesType $RequestedPackages
	 */
	public function __construct($RequestedPackages)
	{
		$this->RequestedPackages = $RequestedPackages;
	}

	/**
	 * @return docTypeRef_RequestedPackagesType
	 */
	public function getRequestedPackages()
	{
		return $this->RequestedPackages;
	}

	/**
	 * @param docTypeRef_RequestedPackagesType $RequestedPackages
	 * @return \DHLExpress\docTypeRef_PackagesType
	 */
	public function setRequestedPackages($RequestedPackages)
	{
		$this->RequestedPackages = $RequestedPackages;
		return $this;
	}

}
