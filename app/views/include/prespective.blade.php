<?php

define("TOP",0);
define("BOTTOM",1);
define("LEFT",2);
define("RIGHT",3);

function perspective($i,$gradient=0.85,$rightdown=TOP,$background=0xFFFFFF, $alpha=0) {
        $w=imagesx($i);
        $h=imagesy($i);
        $col=imagecolorallocatealpha($i,($background>>16)&0xFF,($background>>8)&0xFF,$background&0xFF,$alpha);

        $mult=5;
        $li=imagecreatetruecolor($w*$mult,$h*$mult);
        imagealphablending($li,false);
        imagefilledrectangle($li,0,0,$w*$mult,$h*$mult,$col);
        imagesavealpha($li,true);

        imagecopyresized($li,$i,0,0,0,0,$w*$mult,$h*$mult,$w,$h);
        imagedestroy($i);
        $w*=$mult;
        $h*=$mult;


        $image=imagecreatetruecolor($w,$h);
        imagealphablending($image,false);
        imagefilledrectangle($image,0,0,$w,$h,$col);
        imagealphablending($image,true);

        imageantialias($image,true);
        $test=$h*$gradient;

        $rdmod=$rightdown%2;
        $min=1;
        if($rightdown<2){
            for($y=0;$y<$h;$y++){
                $ny=$rdmod? $y : $h-$y;
                $off=round((1-$gradient)*$w*($ny/$h));
                $t=((1-pow(1-pow(($ny/$h),2),0.5))*(1-$gradient)+($ny/$h)*$gradient);
                $nt=$rdmod? $t : 1-$t;
                if(abs(0.5-$nt)<$min){
                    $min=abs(0.5-$nt);
                    $naty=$off;
                }
                imagecopyresampled($image,$li,
                                    round($off/2),$y,
                                    0,abs($nt*$h),
                                    $w-$off,1,
                                    $w,1);
            }
        } else {
            for($x=0;$x<$w;$x++){
                $nx=$rdmod? $x : $w-$x;
                $off=round((1-$gradient)*$h*($nx/$w));
                $t=((1-pow(1-pow(($nx/$w),2),0.5))*(1-$gradient)+($nx/$w)*$gradient);
                $nt=$rdmod? $t : 1-$t;
                if(abs(0.5-$nt)<$min){
                    $min=abs(0.5-$nt);
                    $natx=$off;
                }
                imagecopyresampled($image,$li,
                                    $x,round($off/2),
                                    abs($nt*$w),0,
                                    1,$h-$off,
                                    1,$h);
            }
        }
        imagedestroy($li);

        imageantialias($image,false);
        imagealphablending($image,false);
        imagesavealpha($image,true);

        $i=imagecreatetruecolor(($w+$naty)/$mult,($h+$natx)/$mult);
        imagealphablending($i,false);
        imagefilledrectangle($i,0,0,($w+$naty)/$mult,($h+$natx)/$mult,$col);
        imagealphablending($i,true);
        imageantialias($i,true);
        imagecopyresampled($i,$image,0,0,0,0,($w+$naty)/$mult,($h+$natx)/$mult,$w,$h);
        imagedestroy($image);
        imagealphablending($i,false);
        imageantialias($i,false);
        imagesavealpha($i,true);
        return $i;
    }
?>