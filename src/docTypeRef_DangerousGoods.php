<?php
namespace DHLExpress;


/**
 * Class docTypeRef_DangerousGoods
 */
class docTypeRef_DangerousGoods
{

	/**
	 * @var docTypeRef_Content $Content
	 */
	protected $Content;

	/**
	 * @param docTypeRef_Content $Content
	 */
	public function __construct(docTypeRef_Content $Content)
	{
		$this->Content = $Content;
	}

	/**
	 * @return docTypeRef_Content
	 */
	public function getContent(): ?docTypeRef_Content
	{
		return $this->Content;
	}

	/**
	 * @param docTypeRef_Content $Content
	 * @return docTypeRef_DangerousGoods
	 */
	public function setContent(docTypeRef_Content $Content): docTypeRef_DangerousGoods
	{
		$this->Content = $Content;
		return $this;
	}

}
