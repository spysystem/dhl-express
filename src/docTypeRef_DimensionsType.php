<?php

namespace DHLExpress;

class docTypeRef_DimensionsType
{

	/**
	 * @var Length $Length
	 */
	protected $Length = null;

	/**
	 * @var Width $Width
	 */
	protected $Width = null;

	/**
	 * @var Height $Height
	 */
	protected $Height = null;

	/**
	 * @param Length $Length
	 * @param Width $Width
	 * @param Height $Height
	 */
	public function __construct($Length, $Width, $Height)
	{
		$this->Length = $Length;
		$this->Width = $Width;
		$this->Height = $Height;
	}

	/**
	 * @return Length
	 */
	public function getLength()
	{
		return $this->Length;
	}

	/**
	 * @param Length $Length
	 * @return \DHLExpress\docTypeRef_DimensionsType
	 */
	public function setLength($Length)
	{
		$this->Length = $Length;
		return $this;
	}

	/**
	 * @return Width
	 */
	public function getWidth()
	{
		return $this->Width;
	}

	/**
	 * @param Width $Width
	 * @return \DHLExpress\docTypeRef_DimensionsType
	 */
	public function setWidth($Width)
	{
		$this->Width = $Width;
		return $this;
	}

	/**
	 * @return Height
	 */
	public function getHeight()
	{
		return $this->Height;
	}

	/**
	 * @param Height $Height
	 * @return \DHLExpress\docTypeRef_DimensionsType
	 */
	public function setHeight($Height)
	{
		$this->Height = $Height;
		return $this;
	}

}
