<?php
class IMG_PROCESS{
 
var $_font1="";
var $_font2="";
var $_font3="";
var $_font4="";
var $_font5="";
var $_font6="";
var $_font_size="";
var $_font_size_watermark="";
var $_path="";
 
public function __construct($font_1,$font_2,$font_3,$font_4,$font_5,$font_6,$font_size="",$font_size_watermark="",$path)
{
	$this->_font1=$font_1;
	$this->_font2=$font_2;
	$this->_font3=$font_3;
	$this->_font4=$font_4;
	$this->_font5=$font_5;
	$this->_font6=$font_6;
	$this->_font_size=$font_size;
	$this->_font_size_watermark=$font_size_watermark;
	$this->_path=$path;
	
}
 
public function imagettftext_cr(&$im, $size, $angle, $x, $y, $color, $fontfile, $text)
{
	// retrieve boundingbox
	$bbox = imagettfbbox($size, $angle, $fontfile, $text);
	// calculate deviation
	$dx = ($bbox[2]-$bbox[0])/2.0 - ($bbox[2]-$bbox[4])/2.0;         // deviation left-right
	$dy = ($bbox[3]-$bbox[1])/2.0 + ($bbox[7]-$bbox[1])/2.0;        // deviation top-bottom
	// new pivotpoint
	$px = $x-$dx;
	$py = $y-$dy;
	return imagettftext($im, $size, $angle, $px, $py, $color, $fontfile, $text);
}
 
 public function imagettftext_cr1(&$im, $size, $angle, $x, $y, $color, $fontfile, $text)
{
	// retrieve boundingbox
	$bbox = imagettfbbox($size, $angle, $fontfile, $text);
	// calculate deviation
	$dx = ($bbox[2]-$bbox[0])/2.0 - ($bbox[2]-$bbox[4])/2.0;         // deviation left-right
	$dy = ($bbox[3]-$bbox[1])/2.0 + ($bbox[7]-$bbox[1])/2.0;        // deviation top-bottom
	// new pivotpoint
	$px = $x-$dx;
	$py = $y-$dy;
	return imagettftext($im, $size, $angle, $x, $y, $color, $fontfile, $text);
}
public function generate_img($texto1,$texto2,$texto3,$texto4,$texto5,$texto6,$texto7,$savepath,$size_arr,$rgb=array("34","96","76"))
{
$fondo=$this->_path;
$image = imagecreate($size_arr['width'],$size_arr['height']);
$image= imagecreatefrompng("$fondo");
// Local font files, relative to script
$otherFont = $this->_font2;
$font1 = $this->_font1;
$font5 = $this->_font5;
$font3 = $this->_font3;
$font4 = $this->_font4;
 
// Main Text
$x=500-60;
$y=500-80;

$fo1_size=25;
$angle=0;
	
	do{

		$fo1_size--;
		$bbox=imagettfbbox($fo1_size,$angle, $font1, $texto1);

		$derecha1=$bbox[2];
		$izquierda1=$bbox[0];
		$ancho1=$derecha1-$izquierda1;
		$alto1=abs($bbox[7]-$bbox[1]);
	}while ($fo1_size>10 && $ancho1>$y);
	if($ancho1>$y)
	{
		# code...
		echo "El texto tiene demasiados caracteres!!!!!";

	}
	else
	{
		$dx = ($bbox[2]-$bbox[0])/2.0 - ($bbox[2]-$bbox[4])/2.0;         // deviation left-right
	$dy = ($bbox[3]-$bbox[1])/2.0 + ($bbox[7]-$bbox[1])/2.0;        // deviation top-bottom
	// new pivotpoint
	$px1 = $x-$dx;
	$py1 = $y-$dy;
	
		$text_x=ImageSX($image)/2.0-$x/2.0;
		$text_y=ImageSY($image)/2.0-$y/2.0;
		if($izquierda1<0)
			$text_x+=abs($izquierda1);
			$linea_arriba1=abs($bbox[7]);
			$text_y+=$linea_arriba1;
			$text_y-=2;


	}

$fo3_size=25;

	
	do{

		$fo3_size--;
		$bbox=imagettfbbox($fo3_size,$angle, $font1, $texto3);

		$derecha3=$bbox[2];
		$izquierda3=$bbox[0];
		$ancho3=$derecha3-$izquierda3;
		$alto3=abs($bbox[7]-$bbox[1]);
	}while ($fo3_size>10 && $ancho3>$y);
	if($ancho3>$y-100)
	{
		# code...
		echo "El texto tiene demasiados caracteres!!!!!";

	}
	else
	{
		$text_x=ImageSX($image)/2.0-$x/2.0;
		$text_y=ImageSY($image)/2.0-$y/2.0;
		if($izquierda3<0)
			$text_x+=abs($izquierda3);
			$linea_arriba3=abs($bbox[7]);
			$text_y+=$linea_arriba3;
			$text_y-=2;


	}

$fo4_size=20;

	
	do{

		$fo4_size--;
		$bbox=imagettfbbox($fo4_size,$angle, $font3, $texto4);

		$derecha4=$bbox[2];
		$izquierda4=$bbox[0];
		$ancho4=$derecha4-$izquierda4;
		$alto4=abs($bbox[7]-$bbox[1]);
	}while ($fo4_size>10 && $ancho4>($y-200));
	if($ancho4>$y)
	{
		# code...
		echo "El texto tiene demasiados caracteres!!!!!";

	}
	else
	{
	$dx2 = ($bbox[2]-$bbox[0])/2.0 - ($bbox[2]-$bbox[4])/2.0;         // deviation left-right
	$dy2 = ($bbox[3]-$bbox[1])/2.0 + ($bbox[7]-$bbox[1])/2.0;        // deviation top-bottom
	// new pivotpoint
	$px2 = $x-$dx2;
	$py2 = $y-$dy2;
		$text_x=ImageSX($image)/2.0-$x/2.0;
		$text_y=ImageSY($image)/2.0-$y/2.0;
		

	}
	$fo7_size=20;

	
	do{

		$fo7_size--;
		$bbox=imagettfbbox($fo7_size,$angle, $font5, $texto7);

		$derecha=$bbox[2];
		$izquierda=$bbox[0];
		$ancho=$derecha-$izquierda;
		$alto=abs($bbox[7]-$bbox[1]);
	}while ($fo7_size>10 && $ancho>($y-190));
	if($ancho>$y)
	{
		# code...
		echo "El texto tiene demasiados caracteres!!!!!";

	}
	else
	{
		$text_x=ImageSX($image)/2.0-$x/2.0;
		$text_y=ImageSY($image)/2.0-$y/2.0;
		if($izquierda<0)
			$text_x+=abs($izquierda);
			$linea_arriba=abs($bbox[7]);
			$text_y+=$linea_arriba;
			$text_y-=2;


	}
$w=$size_arr['width'] / 1.9 ;
$h=$size_arr['height'] / 10 ;
$grey_shade=000;
 
$this->imagettftext_cr($image,$fo1_size,6,$w+25,$h+55,$grey_shade,$font1,$texto1);
$this->imagettftext_cr($image,$this->_font_size,6,$w+25,$h+15,$grey_shade,$font3,$texto2);
$this->imagettftext_cr($image,$fo3_size,6,$w+25,$h+105,$grey_shade,$font1,$texto3);
$this->imagettftext_cr1($image,$fo4_size,6,120,$h+180,$grey_shade,$font4,$texto4);
$this->imagettftext_cr1($image,20,6,124,$h+210,$grey_shade,$font4,$texto5);
$this->imagettftext_cr1($image,20,6,128,$h+240,$grey_shade,$font4,$texto6);
$this->imagettftext_cr1($image,$fo7_size,6,120,$h+320,$grey_shade,$font5,$texto7);

imagealphablending($image, false);
imagesavealpha($image, true);
imagepng($image,$savepath);
imagedestroy($image);
}

public function generate_imgv($texto1,$texto2,$texto3,$texto4,$texto5,$texto6,$savepath,$size_arr,$rgb=array("34","96","76"))
{
$fondo=$this->_path;
$imagev = imagecreate($size_arr['width'],$size_arr['height']);
$imagev= imagecreatefrompng("$fondo");
// Local font files, relative to script
$otherFont = $this->_font2;
$font1 = $this->_font1;
$font5 = $this->_font5;
$font3 = $this->_font3;
$font4 = $this->_font4;
$font6 = $this->_font6; 
// Main Text
$x=ImageSX($imagev)-(60);
$y=ImageSY($imagev)-(80);
$fo1_size=25;
$angle=0;
	do{
		$fo1_size--;
		$bbox=imagettfbbox($fo1_size,$angle, $font1, $texto1);
		$derecha1=$bbox[2];
		$izquierda1=$bbox[0];
		$ancho1=$derecha1-$izquierda1;
		$alto1=abs($bbox[7]-$bbox[1]);
	}while ($fo1_size>10 && $ancho1>$y-200);
	if($ancho1>$y)
	{
		echo "El texto tiene demasiados caracteres!!!!!";
	}
	else
	{
	$dx = ($bbox[2]-$bbox[0])/2.0 - ($bbox[2]-$bbox[4])/2.0;         // deviation left-right
	$dy = ($bbox[3]-$bbox[1])/2.0 + ($bbox[7]-$bbox[1])/2.0;        // deviation top-bottom
	// new pivotpoint
	$px1 = $x-$dx;
	$py1 = $y-$dy;
		$text_x=ImageSX($imagev)/2.0-$x/2.0;
		$text_y=ImageSY($imagev)/2.0-$y/2.0;
		if($izquierda1<0)
			$text_x+=abs($izquierda1);
			$linea_arriba1=abs($bbox[7]);
			$text_y+=$linea_arriba1;
			$text_y-=2;
	}
$fo5_size=14;
	do{

		$fo5_size--;
		$bbox=imagettfbbox($fo5_size,$angle,$font4, $texto5);
		$derecha=$bbox[2];
		$izquierda=$bbox[0];
		$ancho=$derecha-$izquierda;
		$alto=abs($bbox[7]-$bbox[1]);
	}while ($fo5_size>10 && $ancho>($y-475));
	if($ancho>$y)
	{
		# code...
		echo "El texto tiene demasiados caracteres!!!!!";
	}
	else
	{
		$text_x=ImageSX($imagev)/2.0-$x/2.0;
		$text_y=ImageSY($imagev)/2.0-$y/2.0;
		if($izquierda<0)
			$text_x+=abs($izquierda);
			$linea_arriba=abs($bbox[7]);
			$text_y+=$linea_arriba;
			$text_y-=2;
	}
	$fo7_size=30;
	do{
		$fo7_size--;
		$bbox=imagettfbbox($fo7_size,$angle,$font5,$texto6);

		$derecha=$bbox[2];
		$izquierda=$bbox[0];
		$ancho=$derecha-$izquierda;
		$alto=abs($bbox[7]-$bbox[1]);
	}while ($fo7_size>10 && $ancho>($y-200));
	if($ancho>$y)
	{
		# code...
		echo "El texto tiene demasiados caracteres!!!!!";

	}
	else
	{
		$text_x=ImageSX($imagev)/2.0-$x/2.0;
		$text_y=ImageSY($imagev)/2.0-$y/2.0;
		if($izquierda<0)
			$text_x+=abs($izquierda);
			$linea_arriba=abs($bbox[7]);
			$text_y+=$linea_arriba;
			$text_y-=2;
	}

$w=$size_arr['width'] / 1.9 ;
$h=$size_arr['height'] / 10 ;
$grey_shade=000;
 
$this->imagettftext_cr($imagev,$fo1_size,0,$w-50,$h,$grey_shade,$font1,$texto1);
$this->imagettftext_cr1($imagev,16,0,40,$h+70,$grey_shade,$font6,$texto2);
$this->imagettftext_cr1($imagev,14,0,40,$h+430,$grey_shade,$font4,$texto3);
$this->imagettftext_cr1($imagev,14,0,40,$h+450,$grey_shade,$font4,$texto4);
$this->imagettftext_cr1($imagev,$fo5_size,0,40,$h+470,$grey_shade,$font4,$texto5);
$this->imagettftext_cr1($imagev,$fo7_size,0,60,$h+500,$grey_shade,$font5,$texto6);
imagealphablending($imagev, false);
imagesavealpha($imagev, true);
imagepng($imagev,$savepath);
imagedestroy($imagev);
}
}
?>