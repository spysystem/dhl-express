<?php
namespace DHLExpress;


/**
 * Class docTypeRef_PackagesResultsType
 */
class docTypeRef_PackagesResultsType
{

	/**
	 * @var docTypeRef_PackageResultType[]|docTypeRef_PackageResultType $PackageResult
	 */
	protected $PackageResult;

	/**
	 * @param docTypeRef_PackageResultType[]|docTypeRef_PackageResultType $PackageResult
	 */
	public function __construct($PackageResult)
	{
		$this->PackageResult = $PackageResult;
	}

	/**
	 * @return docTypeRef_PackageResultType[]|docTypeRef_PackageResultType
	 */
	public function getPackageResult()
	{
		return $this->PackageResult;
	}

	/**
	 * @param docTypeRef_PackageResultType[]|docTypeRef_PackageResultType $PackageResult
	 * @return docTypeRef_PackagesResultsType
	 */
	public function setPackageResult($PackageResult): docTypeRef_PackagesResultsType
	{
		$this->PackageResult = $PackageResult;
		return $this;
	}

}
