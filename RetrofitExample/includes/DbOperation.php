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
            $Id = substr($data,3, 10);
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
                //     OnIncomBot("Jiklo" + ki.ToString().PadLeft(10, '0'), int.Parse(MainData.BotlistNumber));
            }

        return true;
    }

    function UyingaKirish($data){

        $BotOrClient = "true";
        $GroupNumber = 0;

        if(strlen($data)>2 && substr($data,0, 2) == "%%" && strlen($data)>=69)
        {
            $GroupNumber = substr($data,10, 4);
            $Id = substr($data,59, 10);
            $Level = substr($data,39, 6);
            $Name = substr($data,2, 8);
            $Money = substr($data,45, 12);
            $yol = substr($data,27, 12);
            $pul = substr($data,14, 12);
            if (strlen($data) > 69 && substr($data,69, 1) == "f")
            {
                $BotOrClient = "false";
            }
        }

        if ($GroupNumber > 2100)
        {
            for(int i = 0; i < 100; i = i + 2)
                {
                    if (Grop2help[MainData.GroupNumber + i])
                    {
                        MainData.GroupNumber = MainData.GroupNumber + i;
                        break;
                    }
                }
            }
        else
        {/**/
            if (MainData.GroupNumber.ToString().PadLeft(4,'0') == "0001")
            {
                int mvc = 0;
                    for(int i = 2; i < 100; i=i+2)
                    {
                        //  print("1");
                        switch (int.Parse(MainData.pul))
                        {
                            case 100:if (uyinchilar[i].Length < 5) { MainData.GroupNumber = i; mvc = 1; }  ; break;
                            case 500: if (uyinchilar[100 + i].Length < 5) { MainData.GroupNumber = 100 + i; mvc = 1; } break;
                            case 2000: if (uyinchilar[200 + i].Length < 5) { MainData.GroupNumber = 200 + i; mvc = 1; }; break;
                            case 10000: if (uyinchilar[300 + i].Length < 5) { MainData.GroupNumber = 300 + i; mvc = 1; }; break;
                            case 40000: if (uyinchilar[400 + i].Length < 5) { MainData.GroupNumber = 400 + i; mvc = 1; }; break;
                            case 200000: if (uyinchilar[500 + i].Length < 5) { MainData.GroupNumber = 500 + i; mvc = 1; }; break;
                            case 1000000: if (uyinchilar[600 + i].Length < 5) { MainData.GroupNumber = 600 + i; mvc = 1; }; break;
                            case 10000000: if (uyinchilar[700 + i].Length < 5) { MainData.GroupNumber = 700 + i; mvc = 1; }; break;
                            case 100000000: if (uyinchilar[800 + i].Length < 5) { MainData.GroupNumber = 800 + i; mvc = 1; }; break;
                            case 200000000: if (uyinchilar[900 + i].Length < 5) { MainData.GroupNumber = 900 + i; mvc = 1; }; break;
                            case 400000000: if (uyinchilar[1000 + i].Length < 5) { MainData.GroupNumber = 1000 + i; mvc = 1; }; break;
                            case 1000000000: if (uyinchilar[1100 + i].Length < 5) { MainData.GroupNumber = 1100 + i; mvc = 1; }; break;
                            case 2000000000: if (uyinchilar[1200 + i].Length < 5) { MainData.GroupNumber = 1200 + i; mvc = 1; }; break;
                        }
                        //  print("41");
                        if (mvc == 1) {  break; }
                        //  print("6");
                        switch (int.Parse(MainData.pul))
                        {
                            case 100: if (uyinchilar[i + 1].Length < 9) { MainData.GroupNumber =  i + 1; mvc = 1; }; break;
                            case 500: if (uyinchilar[100 + i + 1].Length < 9) { MainData.GroupNumber = 100 + i + 1; mvc = 1; }; break;
                            case 2000: if (uyinchilar[200 + i + 1].Length < 9) { MainData.GroupNumber = 200 + i + 1; mvc = 1; }; break;
                            case 10000: if (uyinchilar[300 + i + 1].Length < 9) { MainData.GroupNumber = 300 + i + 1; mvc = 1; }; break;
                            case 40000: if (uyinchilar[400 + i + 1].Length < 9) { MainData.GroupNumber = 400 + i + 1; mvc = 1; }; break;
                            case 200000: if (uyinchilar[500 + i + 1].Length < 9) { MainData.GroupNumber = 500 + i + 1; mvc = 1; }; break;
                            case 1000000: if (uyinchilar[600 + i + 1].Length < 9) { MainData.GroupNumber = 600 + i + 1; mvc = 1; }; break;
                            case 10000000: if (uyinchilar[700 + i + 1].Length < 9) { MainData.GroupNumber = 700 + i + 1; mvc = 1; }; break;
                            case 100000000: if (uyinchilar[800 + i + 1].Length < 9) { MainData.GroupNumber = 800 + i + 1; mvc = 1; }; break;
                            case 200000000: if (uyinchilar[900 + i + 1].Length < 9) { MainData.GroupNumber = 9000 + i + 1; mvc = 1; }; break;
                            case 400000000: if (uyinchilar[1000 + i + 1].Length < 9) { MainData.GroupNumber = 1000 + i + 1; mvc = 1; }; break;
                            case 1000000000: if (uyinchilar[1100 + i + 1].Length < 9) { MainData.GroupNumber = 1100 + i + 1; mvc = 1; }; break;
                            case 2000000000: if (uyinchilar[1200 + i + 1].Length < 9) { MainData.GroupNumber = 1200 + i + 1; mvc = 1; }; break;
                        }
                        if (mvc == 1) {  break; }
                    }
                }
        }
        //print("lk= " + MainData.GroupNumber);
        if (MainData.GroupNumber % 2 == 0)
        {
            if (uyinchilar[MainData.GroupNumber].Length > 4)
                {
                    if (MainData.BotOrClient != "false")
                    {
                        BRoadFor("OdamtudaUzi", c);
                    }
                }
                else
                {
                    if (MainData.GroupNumber > 2100)
                    {
                        if (Grop2help[MainData.GroupNumber])
                        {
                            uyinchiniGruppgaQushish(MainData, c);
                        }
                    }
                    else
                    {
                        uyinchiniGruppgaQushish(MainData, c);
                    }
                }
            }
        else
        {
            if (uyinchilar[MainData.GroupNumber].Length > 8)
                {
                    if (MainData.BotOrClient != "false")
                    {
                        BRoadFor("OdamtudaUzi", c);
                    }
                }
                else
                {
                    if (MainData.GroupNumber > 2100)
                    {
                        if (Grop2help[MainData.GroupNumber])
                        {
                            uyinchiniGruppgaQushish( MainData, c);
                        }
                    }
                    else
                    {
                        uyinchiniGruppgaQushish( MainData, c);
                    }
                }
            }
        return true;
    }





}