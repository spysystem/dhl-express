<?php
namespace DHLExpress;


/**
 * Class docTypeRef_PackagesResultsType
 */
class docTypeRef_PackagesResultsType
{

	/**
	 * @var docTypeRef_PackageResultType[] $PackageResult
	 */
	protected $PackageResult;

	/**
	 * @param docTypeRef_PackageResultType[] $PackageResult
	 */
	public function __construct(array $PackageResult)
	{
		$this->PackageResult = $PackageResult;
	}

	/**
	 * @return docTypeRef_PackageResultType[]
	 */
	public function getPackageResult(): ?array
	{
		return $this->PackageResult;
	}

	/**
	 * @param docTypeRef_PackageResultType[] $PackageResult
	 * @return docTypeRef_PackagesResultsType
	 */
	public function setPackageResult(array $PackageResult): docTypeRef_PackagesResultsType
	{
		$this->PackageResult = $PackageResult;
		return $this;
	}

}
