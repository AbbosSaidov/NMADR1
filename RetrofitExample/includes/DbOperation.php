<?php
class DbOperation
{
    private $con;

    function __construct()
    {
        require_once dirname(__FILE__) . '/DbConnect.php';
        $db = new DbConnect();
        $this->con = $db->connect();
    }

    //Method to create a new user
    function registerUser($data)
    {
        $BotOrClient = "true";
        $Id = "";  $Money = 0;$ki=0;
        if (strlen($data) > 2 && substr($data,0, 3) == "%??" && strlen($data) >= 35)
        {
            $nmaligi = "RegistrID";
            $Id = substr($data,3, 10);
            $Name = substr($data,11, 18);
            $Money = substr($data,21, 12);
            $ImageNumber = substr($data,33, 2);
            if (strlen($data)>40&&substr($data,35, 1) == "f")
            {
                $BotOrClient = "false";
                $BotlistNumber = substr($data,36, 12);
            }
        }

            if ($Id == "0000000000")
            {


               if ($BotOrClient!= "false")
                {
                    $stmt2=$this->con->prepare("SELECT id FROM users WHERE nmadr=?");
                    $stmt2->bind_param("i",$ki);
                    $stmt2->execute();
                    $stmt2->store_result();
                      $ki=$ki+1;

                    $stmt =$this->con->prepare("INSERT INTO players (id,Imagenumber,money) VALUES(?,?,?)");
                    $stmt->bind_param("isi",$ki,$ImageNumber,$Money);
                    $stmt->execute();
                }
            }
            if ($BotOrClient != "false")
            {
                return("Jiklo".str_pad($ki,10,"0"));
            }
            else
            {
                OnIncomBot("Jiklo" + ki.ToString().PadLeft(10, '0'), int.Parse(MainData.BotlistNumber));
            }

        return 0;
    }






}