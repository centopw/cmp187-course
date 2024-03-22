<?php
require_once "character.php";

class staff extends character
{
    private $staffCode;
    private $part;

    public function __construct($fullname, $countryCode, $part)
    {
        parent::__construct($fullname, $countryCode);
        $this->part = $part;
        $this->staffCode = $this->generateStaffCode();
    }

    public function getStaffCode()
    {
        return $this->staffCode;
    }

    public function getPart()
    {
        return $this->part;
    }

    private function generateStaffCode()
    {
        static $staffCodeCounter = 1;
        return $staffCodeCounter++;
    }
}
?>