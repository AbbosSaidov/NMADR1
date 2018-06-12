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

                    $stmt =$this->con->prepare("INSERT INTO users (id,Imagenumber,money) VALUES(?,?,?)");
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

        function Tekshir($ki1){

            $stmt2=$this->con->prepare("SELECT HowmanyPlayer FROM players WHERE GroupNumber=?");
            $stmt2->bind_param("i",$ki1);
            $stmt2->execute();
            $stmt2->store_result();
            return $ki1;
        }

        function uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id){


            function uyinchilarade($son)
    {$st=uyinchilar($son);

        if (!strpos($st, '1') !== false)
        {
               $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                $ki=$st."1";
                $stmt->bind_param("s",$ki);
                $stmt->execute();
        }
        else
        {
            if (!strpos($st, '4') !== false)
            {
                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                $ki=$st."4";
                $stmt->bind_param("s",$ki);
                $stmt->execute();
            }
            else
            {
                if (!strpos($st, '2') !== false)
                {
                    $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                    $ki=$st."2";
                    $stmt->bind_param("s",$ki);
                    $stmt->execute();
                }
                else
                {
                    if (!strpos($st, '6') !== false)
                    {
                        $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                        $ki=$st."6";
                        $stmt->bind_param("s",$ki);
                        $stmt->execute();
                    }
                    else
                    {
                        if (!strpos($st, '3') !== false)
                        {
                            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                            $ki=$st."3";
                            $stmt->bind_param("s",$ki);
                            $stmt->execute();
                        }
                        else
                        {
                            if (!strpos($st, '5') !== false)
                            {
                                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                $ki=$st."5";
                                $stmt->bind_param("s",$ki);
                                $stmt->execute();
                            }
                            else
                            {
                                if (!strpos($st, '9') !== false)
                                {
                                    $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                    $ki=$st."9";
                                    $stmt->bind_param("s",$ki);
                                    $stmt->execute();
                                }
                                else
                                {
                                    if (!strpos($st, '8') !== false)
                                    {
                                        $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                        $ki=$st."8";
                                        $stmt->bind_param("s",$ki);
                                        $stmt->execute();
                                    }
                                    else
                                    {
                                        if (!strpos($st, '7') !== false)
                                        {
                                            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                            $ki=$st."7";
                                            $stmt->bind_param("s",$ki);
                                            $stmt->execute();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    function uyinchilarade2($son)
    {
        $st=uyinchilar($son);

        if (!strpos($st, '1') !== false)
        {
            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
            $ki=$st."1";
            $stmt->bind_param("s",$ki);
            $stmt->execute();
        }
        else
        {
            if (!strpos($st, '4') !== false)
            {
                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                $ki=$st."4";
                $stmt->bind_param("s",$ki);
                $stmt->execute();
            }
            else
            {
                if (!strpos($st, '2') !== false)
                {
                    $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                    $ki=$st."2";
                    $stmt->bind_param("s",$ki);
                    $stmt->execute();
                }
                else
                {
                    if (!strpos($st, '6') !== false)
                    {
                        $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                        $ki=$st."6";
                        $stmt->bind_param("s",$ki);
                        $stmt->execute();
                    }
                    else
                    {
                        if (!strpos($st, '3') !== false)
                        {
                            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                            $ki=$st."3";
                            $stmt->bind_param("s",$ki);
                            $stmt->execute();
                        }
                        else
                        {
                            if (!strpos($st, '5') !== false)
                            {
                                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                $ki=$st."5";
                                $stmt->bind_param("s",$ki);
                                $stmt->execute();
                            }
                            else
                            {
                                if (!strpos($st, '9') !== false)
                                {
                                    $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                    $ki=$st."9";
                                    $stmt->bind_param("s",$ki);
                                    $stmt->execute();
                                }
                                else
                                {
                                    if (!strpos($st, '8') !== false)
                                    {
                                        $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                        $ki=$st."8";
                                        $stmt->bind_param("s",$ki);
                                        $stmt->execute();
                                    }
                                    else
                                    {
                                        if (!strpos($st, '7') !== false)
                                        {
                                            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                            $ki=$st."7";
                                            $stmt->bind_param("s",$ki);
                                            $stmt->execute();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

            //  grop22[Maindata.GroupNumber].Add(new Grop22());



            if ($BotOrClient != "false")
            {

                $stmt =$this->con->prepare("UPDATE users SET ContactName = ? WHERE CustomerID =$Id");
                $ki="person".Tekshir($GroupNumber);
                $stmt->bind_param("s",$ki);
                $stmt->execute();



            //   grop2[Maindata.GroupNumber][GruppadagiAktivOdamlarSoni[Maindata.GroupNumber]].clientName = "person" + GruppadagiAktivOdamlarSoni[Maindata.GroupNumber];
            }
            if ($GroupNumber % 2 == 0)
            {
                uyinchilarade2($GroupNumber);
            }
            else
            {
                uyinchilarade($GroupNumber);
            }
            if (Maindata.BotOrClient != "false")
            {
                c.ClientGroup = Maindata.GroupNumber.ToString().PadLeft(4, '0');
                c.ClientLevel = Maindata.Level;
                c.indexClient = int.Parse(uyinchilar[Maindata.GroupNumber].Substring(uyinchilar[Maindata.GroupNumber].Length - 1, 1));
            }
            else
            {
                grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].BotOrClient = false;
            }

            grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].ClientGroup = Maindata.GroupNumber.ToString().PadLeft(4, '0');
        grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].ClientLevel = Maindata.Level;
        grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].indexClient = int.Parse(uyinchilar[Maindata.GroupNumber].Substring(uyinchilar[Maindata.GroupNumber].Length - 1, 1));
        grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].TikilganPullar = "0";



            function TurnLk($lk)
    {
        $m = 0;
        //lobbi
        if ($lk > 0) { $m = 10; }
        if ($lk > 100) { $m = 50; }
        if ($lk > 200) { $m = 200; }
        if ($lk > 300) { $m = 1000; }
        if ($lk > 400) { $m = 4000; }
        if ($lk > 500) { $m = 20000; }
        if ($lk > 600) { $m = 100000; }
        if ($lk > 700) { $m = 500000; }
        if ($lk > 800) { $m = 1000000; }
        if ($lk > 900) { $m = 2000000; }
        if ($lk > 1000) { $m = 10000000; }
        if ($lk > 1100) { $m = 200000000; }
        if ($lk > 1200) { $m = 500000000; }
        if ($lk > 1300) { $m = 1000000000; }
        if ($lk > 1400) { $m = 500000; }
        if ($lk > 1500) { $m = 1000000; }
        if ($lk > 1600) { $m = 2000000; }
        if ($lk > 1700) { $m = 10000000; }
        if ($lk > 1800) { $m = 200000000; }
        if ($lk > 1900) { $m = 500000000; }
        if ($lk > 2000) { $m = 1000000000; }
        //turnir
        if ($lk > 2100) { $m = 20; }
        if ($lk > 2200) { $m = 20; }
        if ($lk > 2300) { $m = 20; }
        if ($lk > 2400) { $m = 20; }
        if ($lk > 2500) { $m = 20; }
        if ($lk > 2600) { $m = 20; }
        if ($lk > 2700) { $m = 20; }
        if ($lk > 2800) { $m = 20; }

        //3roundli
        if ($lk > 2900) { $m = 20; }
        if ($lk > 3000) { $m = 20; }
        if ($lk > 3100) { $m = 20; }

        return $m;
    }

            function uyinchilar($grouppade){

                $stmt2=$this->con->prepare("SELECT uyinchilar FROM players WHERE GroupNumber=?");
                $stmt2->bind_param("s",$grouppade);
                $stmt2->execute();
                $stmt2->store_result();
                return $grouppade;
            }

            function OxirgiZapisplar($GroupNumber ,$OxirgiZapis){
                $stmt2=$this->con->prepare("SELECT $OxirgiZapis FROM players WHERE GroupNumber=?");
                $stmt2->bind_param("s",$GroupNumber);
                $stmt2->execute();
                $stmt2->store_result();

                return $GroupNumber;
            }

      //      NechtasiBorliginiAniqlash($GroupNumber);

     //       ChiqqanBusaChiqaribYuborish($GroupNumber);

        $minStavka = TurnLk($GroupNumber);

            $gruppdagaiOdamlariSoni=0;
        for ($i = 0; $i < Tekshir($GroupNumber); $i++)
        {
          switch(substr(uyinchilar($GroupNumber),$i, 1)){
              case 0 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis0"),14, 12) >= $minStavka)
            {
                $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
            }
             break;
              case 1 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis1"),14, 12) >= $minStavka)
              {
                  $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
              } break;
              case 2 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis2"),14, 12) >= $minStavka)
              {
                  $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
              } break;
              case 3 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis3"),14, 12) >= $minStavka)
              {
                  $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
              } break;
              case 4 :   if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis4"),14, 12) >= $minStavka)
              {
                  $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
              }break;
              case 5 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis5"),14, 12) >= $minStavka)
              {
                  $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
              } break;
              case 6 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis6"),14, 12) >= $minStavka)
              {
                  $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
              } break;
              case 7 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis7"),14, 12) >= $minStavka)
              {
                  $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
              } break;
              case 8 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis8"),14, 12) >= $minStavka)
              {
                  $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
              } break;
          }
        }





        string data = "%%" + Maindata.Name + Maindata.GroupNumber.ToString().PadLeft(4, '0') + Maindata.pul + "$" + Maindata.yol
                + Maindata.Level + Maindata.Money + "xb" + Maindata.Id;
        //%%NameByMe\Ism\0001\gruppa\00000001000$\pul\000000000000\yul\00000\level\000000001000\pul\xb0000000000\id\
        OxirgiZapisplar[Maindata.GroupNumber, int.Parse(uyinchilar[Maindata.GroupNumber].Substring(uyinchilar[Maindata.GroupNumber].Length - 1, 1))] =
        data + uyinchilar[Maindata.GroupNumber].Substring(uyinchilar[Maindata.GroupNumber].Length - 1, 1);
        string kil = "";
        for(int m = 0; m < (uyinchilar[Maindata.GroupNumber].Length - 1); m++)
        {
            if(OxirgiZapisplar[Maindata.GroupNumber, int.Parse(uyinchilar[Maindata.GroupNumber].Substring(m, 1))] != "")
            { kil = kil + OxirgiZapisplar[Maindata.GroupNumber, int.Parse(uyinchilar[Maindata.GroupNumber].Substring(m, 1))]; }
        }
        GruppadagiAktivOdamlarSoni[Maindata.GroupNumber] = GruppadagiAktivOdamlarSoni[Maindata.GroupNumber] + 1;
        StartCoroutine(PlayerdaKartaniTarqatish(data, kil, Maindata.GroupNumber));


            return true;
        }


        function grop2help($grouppy){

    $stmt2=$this->con->prepare("SELECT grop2help FROM players WHERE GroupNumber=?");
    $stmt2->bind_param("s",$grouppy);
    $stmt2->execute();
    $stmt2->store_result();

    return $grouppy;
}


        $BotOrClient = "true";
        $GroupNumber = 0;
        $pul = "";
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
        $ki=$GroupNumber;
        if ($GroupNumber > 2100)
        {
            for($i = 0; $i < 100; $i = $i + 2)
            {

                if (Grop2help($GroupNumber + $i))
                    {
                        $GroupNumber = $GroupNumber + $i;
                        break;
                    }
            }
        }
        else
        {/**/
            if (str_pad((string)$ki,10,"0") == "0001")
            {
                $mvc = 0;
                    for($i = 2; $i < 100; $i=$i+2)
                    {
                        //  print("1");
                        switch ((int)$pul)
                        {
                            case 100:if (Tekshir($i) < 5) { $GroupNumber = $i; $mvc = 1; }  ; break;
                            case 500: if (Tekshir(100 + $i) < 5) { $GroupNumber = 100 + $i; $mvc = 1; } break;
                            case 2000: if (Tekshir(200 + $i) < 5) { $GroupNumber = 200 + $i; $mvc = 1; }; break;
                            case 10000: if (Tekshir(300 + $i) < 5) { $GroupNumber = 300 + $i; $mvc = 1; }; break;
                            case 40000: if (Tekshir(400 + $i) < 5) { $GroupNumber = 400 + $i; $mvc = 1; }; break;
                            case 200000: if (Tekshir(500 + $i) < 5) { $GroupNumber = 500 + $i; $mvc = 1; }; break;
                            case 1000000: if (Tekshir(600 + $i) < 5) { $GroupNumber = 600 + $i; $mvc = 1; }; break;
                            case 10000000: if (Tekshir(700 + $i) < 5) { $GroupNumber = 700 +$i; $mvc = 1; }; break;
                            case 100000000: if (Tekshir(800 + $i) < 5) { $GroupNumber = 800 + $i; $mvc = 1; }; break;
                            case 200000000: if (Tekshir(900 + $i) < 5) { $GroupNumber = 900 +$i; $mvc = 1; }; break;
                            case 400000000: if (Tekshir(1000 + $i) < 5) { $GroupNumber = 1000 + $i; $mvc = 1; }; break;
                            case 1000000000: if (Tekshir(1100 + $i) < 5) { $GroupNumber = 1100 + $i; $mvc = 1; }; break;
                            case 2000000000: if (Tekshir(1200 + $i) < 5) { $GroupNumber = 1200 + $i; $mvc = 1; }; break;
                        }
                        //  print("41");
                        if ($mvc == 1) {  break; }
                        //  print("6");
                        switch ((int)$pul)
                        {
                            case 100: if (Tekshir($i + 1) < 9) { $GroupNumber =  $i + 1; $mvc = 1; }; break;
                            case 500: if (Tekshir(100 + $i + 1) < 9) { $GroupNumber = 100 + $i + 1; $mvc = 1; }; break;
                            case 2000: if (Tekshir(200 + $i + 1) < 9) { $GroupNumber = 200 + $i + 1; $mvc = 1; }; break;
                            case 10000: if (Tekshir(300 + $i + 1) < 9) { $GroupNumber = 300 + $i + 1; $mvc = 1; }; break;
                            case 40000: if (Tekshir(400 + $i + 1) < 9) { $GroupNumber = 400 + $i + 1; $mvc = 1; }; break;
                            case 200000: if (Tekshir(500 + $i + 1) < 9) { $GroupNumber = 500 + $i + 1; $mvc = 1; }; break;
                            case 1000000: if (Tekshir(600 + $i + 1) < 9) { $GroupNumber = 600 + $i + 1; $mvc = 1; }; break;
                            case 10000000: if (Tekshir(700 + $i + 1) < 9) { $GroupNumber = 700 + $i + 1; $mvc = 1; }; break;
                            case 100000000: if (Tekshir(800 + $i + 1) < 9) { $GroupNumber = 800 + $i + 1; $mvc = 1; }; break;
                            case 200000000: if (Tekshir(900 + $i + 1) < 9) { $GroupNumber = 9000 + $i + 1; $mvc = 1; }; break;
                            case 400000000: if (Tekshir(1000 + $i + 1) < 9) { $GroupNumber = 1000 + $i + 1; $mvc = 1; }; break;
                            case 1000000000: if (Tekshir(1100 + $i + 1) < 9) { $GroupNumber = 1100 + $i + 1; $mvc = 1; }; break;
                            case 2000000000: if (Tekshir(1200 + $i + 1) < 9) { $GroupNumber = 1200 + $i + 1; $mvc = 1; }; break;
                        }
                        if ($mvc == 1) {  break; }
                    }
                }
        }
        //print("lk= " + MainData.GroupNumber);
        if ($GroupNumber % 2 == 0)
        {
            if (Tekshir($GroupNumber) > 4)
                {
                    if ($BotOrClient != "false")
                    {
                        return"OdamtudaUzi";
                    }
                }
                else
                {
                    if ($GroupNumber > 2100)
                    {
                        if (Grop2help($GroupNumber)=="true")
                        {
                            uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id);
                        }
                    }
                    else
                    {
                        uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id);
                    }
                }
            }
        else
        {
            if (Tekshir($GroupNumber) > 8)
                {
                    if ($BotOrClient != "false")
                    {
                        return"OdamtudaUzi";
                    }
                }
                else
                {
                    if ($GroupNumber > 2100)
                    {
                        if (Grop2help($GroupNumber)=="true")
                        {
                            uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id);
                        }
                    }
                    else
                    {
                        uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id);
                    }
                }
            }
        return true;
    }




}