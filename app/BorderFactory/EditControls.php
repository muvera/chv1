<?php
class EditControls {

	public static function getcontrolid($id, $size, $border, $folderName, $sysimg, $cid)
	{


		// Total of 8 controls
		// Zoom In
				if($cid == 1)
		{
			ZoomIn::action($id, $size, $border, $folderName, $cid, $sysimg);
		}
		// Zoom Out
				if($cid == 2)
		{
			ZoomOut::action($id, $size, $border, $folderName, $cid, $sysimg);
		}
		// Left
				if($cid == 3)
		{
			Left::action($id, $size, $border, $folderName, $cid, $sysimg);
		}
		// Right
				if($cid == 4)
		{
			Right::action($id, $size, $border, $folderName, $cid, $sysimg);
		}
		// Up
				if($cid == 5)
		{
			Up::action($id, $size, $border, $folderName, $cid, $sysimg);
		}
		// Down
				if($cid == 6)
		{
			Down::action($id, $size, $border, $folderName, $cid, $sysimg);
		}
		// Rotate
				if($cid == 7)
		{
			Rotate::action($id, $size, $border, $folderName, $cid, $sysimg);
		}
		// Reset
				if($cid == 8)
		{
				Reset::action($id, $size, $border, $folderName, $cid, $sysimg);
		}
	}

}