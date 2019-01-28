<?php
include ("point2dandpoint3d.php");
class Point3d extends Point2D{
    public $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function setz($z){
        $this->z = $z;
    }
    public function getz(){
        return $this->z;
    }
    public function setXY($x, $y, $z)
    {
        parent::setXY($x, $y);
        $this->z = $z;
    }
    public function getXYZ(){
        $arr[] = $this->x;
        $arr[] = $this->y;
        $arr[] = $this->z;
        return json_encode($arr);
    }
    public function __toString()
    {
        return $this->getXYZ();
    }
}
$b = new Point3d(2,4,6);
echo "toa do 3D la " . $b->getXYZ();
echo "<br>";
echo "Toa do 2D la: " .$b->getXY();