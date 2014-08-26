<?php namespace cakehollywood\Billing;

interface BillingInterface {
	public function charge(array $data);
}