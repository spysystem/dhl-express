<?php

namespace DHLExpress;

class docTypeRef_DangerousGoods
{

	/**
	 * @var docTypeRef_Content $Content
	 */
	protected $Content = null;

	/**
	 * @param docTypeRef_Content $Content
	 */
	public function __construct($Content)
	{
		$this->Content = $Content;
	}

	/**
	 * @return docTypeRef_Content
	 */
	public function getContent()
	{
		return $this->Content;
	}

	/**
	 * @param docTypeRef_Content $Content
	 * @return \DHLExpress\docTypeRef_DangerousGoods
	 */
	public function setContent($Content)
	{
		$this->Content = $Content;
		return $this;
	}

}
