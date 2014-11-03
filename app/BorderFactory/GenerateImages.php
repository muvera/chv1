<?php
class GenerateImages{
	
	static public function make(){
		
	SessionManager::makeFolder();
	// 
	if (Session::get('border_make')==1) One::make();
	if (Session::get('border_make')==2) Two::make();
	if (Session::get('border_make')==4) Four::make();
	if (Session::get('border_make')==6) Six::make();
	if (Session::get('border_make')==8) Eight::make();
	if (Session::get('border_make')==12) Twelve::make();
	if (Session::get('border_make')==24) TwentyFour::make();

	}


}