<?php

interface Addressable
{
	public function getAddress();

	public function getAddress2();

	public function getLocality();

	public function getRegion();

	public function getPostalCode();

	public function getCountryId();
}