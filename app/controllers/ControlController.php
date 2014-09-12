<?php

class ControlController extends \BaseController {


	public function control($id){

		if($id=='1') ZoomProcess::IncreaseImage();
		if($id=='2') ZoomProcess::DecreaseImage();
		if($id=='3') RightLeftProcess::Right();
		if($id=='4') RightLeftProcess::Left();
		if($id=='5') UpDownProcess::Up();
		if($id=='6') UpDownProcess::Down();
		if($id=='7') RotateProcess::Rotate();
		if($id=='8') ResetProcess::Reset();




		return Redirect::back();


	}

}