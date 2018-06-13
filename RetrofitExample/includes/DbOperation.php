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

        function uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol){


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
            if (!strpos($st, '3') !== false)
            {
                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                $ki=$st."4";
                $stmt->bind_param("s",$ki);
                $stmt->execute();
            }
            else
            {
                if (!strpos($st, '5') !== false)
                {
                    $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                    $ki=$st."2";
                    $stmt->bind_param("s",$ki);
                    $stmt->execute();
                }
                else
                {
                    if (!strpos($st, '7') !== false)
                    {
                        $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                        $ki=$st."6";
                        $stmt->bind_param("s",$ki);
                        $stmt->execute();
                    }
                    else
                    {
                        if (!strpos($st, '9') !== false)
                        {
                            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                            $ki=$st."3";
                            $stmt->bind_param("s",$ki);
                            $stmt->execute();
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
            if ($BotOrClient != "false")
            {
                $stmt =$this->con->prepare("UPDATE users SET Index = ?,groupnamer = ?,Levelde = ?,Tikilgan='0' WHERE CustomerID =$Id");

                $stmt->bind_param("iii",substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1),$GroupNumber,$Level);
                $stmt->execute();
            }
            else
            {
               // grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].BotOrClient = false;
            }

      //  grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].ClientGroup = Maindata.GroupNumber.ToString().PadLeft(4, '0');
      //  grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].ClientLevel = Maindata.Level;
      //  grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].indexClient = int.Parse(uyinchilar[Maindata.GroupNumber].Substring(uyinchilar[Maindata.GroupNumber].Length - 1, 1));
      //  grop22[Maindata.GroupNumber][grop22[Maindata.GroupNumber].Count - 1].TikilganPullar = "0";



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

            function YurishAsosiy($lk, $minSatck,$soni){
                $koo=$lk;
                $stmt2=$this->con->prepare("SELECT KartaTarqatildi FROM players WHERE groupnumber=?");
                $stmt2->bind_param("s",$koo);
                $stmt2->execute();
                $stmt2->store_result();

                if ($koo== "false")
        {
            if ($lk > 2100)
            {
                $stmt =$this->con->prepare("UPDATE players SET group2help = ? WHERE gruberopnum =$lk");
                $sad="false";
                $stmt->bind_param("i",$sad);
                $stmt->execute();
            }

         //   yield return new WaitForSeconds(2);

           // NechtasiBorliginiAniqlash( lk);


          //  ChiqqanBusaChiqaribYuborish( lk);
            $trt = -1;
            if ($koo == "false")
            {/*
                for ($i = 0; $i < ChiqaribYuborish.Count; $i++)
                {
                    if (ChiqaribYuborish[i].lk1 == lk)
                    {
                        if(ChiqaribYuborish[i].Timer.IsRunning)
                        {
                            ChiqaribYuborish[i].Timer.Stop();
                            ChiqaribYuborish[i].Timer.Reset();
                        }
                        $trt = $i;
                        break;
                    }
                }
                if ($trt == -1)
                {
                    ChiqaribYuborish.Add(new RRniKItish(lk));
                }*/
                $dssad = 0;
                for ($i = 0; $i < Tekshir($lk); $i++)
                {
                    if (int.Parse(OxirgiZapisplar[lk, int.Parse(uyinchilar[lk].Substring(i, 1))].Substring(14, 12)) +
                int.Parse(OxirgiZapisplar[lk, int.Parse(uyinchilar[lk].Substring(i, 1))].Substring(27, 12)) >= minSatck)
                    {
                        $dssad = $dssad + 1;
                    }
                }
                huy[lk] = GruppadagiAktivOdamlarSoni[lk];
                string ttt4 = "";
                YurishKimmiki[lk] = uyinchilar[lk];
                for (int i = 0; i < 9; i++)
                {
                    if (uyinchilar[lk].Contains((i + 1).ToString()) && int.Parse(OxirgiZapisplar[lk, i + 1].Substring(14, 12)) +
                int.Parse(OxirgiZapisplar[lk, i + 1].Substring(27, 12)) >= minSatck)
                    {
                        ttt4 = ttt4 + (i + 1).ToString();
                    }
                }
                YurishKimmiki[lk] = ttt4;
                print("Yurish =" + YurishKimmiki[lk]);
                // YurishKimmiki[lk] = YurishKimmiki[lk].Substring(0,1) + YurishKimmiki[lk];
                $mkj = "";
                for ($i = 1; $i < 10; $i++)
                {
                    $gd = KimBoshlashi[lk] + i;
                    if ($gd > 9)
                    {
                        $gd = $gd - 9;
                    }

                    if (YurishKimmiki[lk].Contains((gd).ToString()))
                    {
                        YurishKimmiki[lk] = (gd).ToString() + YurishKimmiki[lk];
                        KimBoshlashi[lk] = gd;
                        break;
                    }
                }
            }
            if (BotGrouplar[lk].Count + grop2[lk].Count != grop22[lk].Count)
            {
                for (int i = 0; i < grop2[lk].Count; i++)
                {
                    int mkdsd = BotGrouplar[lk].Count;
                    for (int l = 0; l < mkdsd; l++)
                    {
                        if (grop2[lk][i].indexClient.ToString() == BotGrouplar[lk][l].Index)
                        {
                            BotGrouplar[lk].RemoveAt(l);
                            l = l - 1;
                            mkdsd = mkdsd - 1;
                        }
                    }
                }
            }
            if (GruppadagiAktivOdamlarSoni[lk] >= soni && KartaTarqatildi[lk] == false)
            {
                KartaTarqatildi[lk] = true;
                for (int i = 0; i < grop22[lk].Count; i++)
                {
                    grop22[lk][i].TikilganPullar = "0";
                }

                combinatsiya();
                //Gruppalaga ajratiganda
                XammaKartalar[lk] = cards[n[0]] + cards[n[1]] + cards[n[2]] + cards[n[3]] + cards[n[4]];
                if (trt != -1) { ChiqaribYuborish[trt].Timer.Start(); }
                try
                {
                    for (int i = 0; i < 9; i++)
                    {
                        uyinchilar[lk] = uyinchilar[lk].Substring(1, 1) +
                    uyinchilar[lk].Substring(2, uyinchilar[lk].Length - 2) + uyinchilar[lk].Substring(0, 1);
                        print(" " + uyinchilar[lk]);
                        if (YurishKimmiki[lk].Contains(uyinchilar[lk].Substring(1, 1)) &&
                            YurishKimmiki[lk].Contains(uyinchilar[lk].Substring(0, 1)))
                        {
                            break;
                        }
                    }
                }
                catch (Exception e)
                {
                    print(e.Message);
                }
                int totti = GruppadagiAktivOdamlarSoni[lk];
                huy[lk] = totti;

                for (int m = 0; m < totti; m++)
                {

                    print("Yurish " + m + grop2[lk].Count + " " + totti);
                    int tott2 = -1, tott3 = 0; ;
                    for (int o = 0; o < grop2[lk].Count; o++)
                    {

                        if (YurishKimmiki[lk].Length>m+1 && YurishKimmiki[lk].Substring(m + 1, 1) == grop2[lk][o].indexClient.ToString())
                        {

                            tott2 = o;  print("Yurish " + tott2);
                            break;
                        }
                    }
                    for (int o = 0; o < grop22[lk].Count; o++)
                    {
                        if (YurishKimmiki[lk].Length > m + 1 && YurishKimmiki[lk].Substring(m + 1, 1) == grop22[lk][o].indexClient.ToString())
                        {
                            tott3 = o;
                            break;
                        }
                    }
                    if (tott2 !=-1)
                    {
                        try
                        {
                            StreamWriter writer = new StreamWriter(grop2[lk][tott2].tcp.GetStream());
                            writer.WriteLine(cards[g[m * 2]] + cards[g[m * 2 + 1]] + "" + YurishKimmiki[lk].Substring(0, 1) +
                        (minSatck / 2).ToString().PadLeft(12, '0') + "!" + (minSatck).ToString().PadLeft(12, '0') +
                        uyinchilar[lk] + grop22[lk][tott2].indexClient + grop22[lk][tott2].ClientGroup);
                            writer.Flush();
                            print("Toott= " + grop22[lk][tott2].indexClient + " " + grop2[lk][tott2].indexClient);
                        }
                        catch (ObjectDisposedException e)
                        {
                            print("ee uyinchi chiqibketti" + e.Message);
                        }
                    }
                    else
                    {
                        int mop = 0;
                        for(int i = 0; i < BotGrouplar[lk].Count; i++)
                        {
                            if(grop22[lk][tott3].indexClient.ToString()== BotGrouplar[lk][i].Index)
                            {
                                mop = i;
                                break;
                            }
                        }
                            OnIncomBot(cards[g[m * 2]] + cards[g[m * 2 + 1]] + "" + YurishKimmiki[lk].Substring(0, 1) +
                    (minSatck / 2).ToString().PadLeft(12, '0') + "!" + (minSatck).ToString().PadLeft(12, '0') +
                    uyinchilar[lk] + grop22[lk][tott3].indexClient + grop22[lk][tott3].ClientGroup, int.Parse(BotGrouplar[lk][mop].IdNumber));
                    }
                    yield return null;
                }
            }
        }
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


        $data = "%%".$Name .str_pad((string)$GroupNumber,4,"0").$pul."$" .$yol
                .$Level .$Money."xb".$Id;
        //%%NameByMe\Ism\0001\gruppa\00000001000$\pul\000000000000\yul\00000\level\000000001000\pul\xb0000000000\id\
$index =substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1)
            switch($index){
                case 0;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar0 = ? WHERE CustomerID =$Id")
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);
                    $stmt->execute();  break;
                case 1;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar1 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 2;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar2 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 3;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar3 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 4;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar4 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 5;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar5 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 6;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar6 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 7;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar7 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 8;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar8 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
            }


        $kil = "";
        for($m = 0; $m < (Tekshir($GroupNumber) - 1); $m++)
        {
            if(OxirgiZapisplar[Maindata.GroupNumber, int.Parse(uyinchilar[Maindata.GroupNumber].Substring(m, 1))] != "")
            { $kil = $kil.OxirgiZapisplar[Maindata.GroupNumber, int.Parse(uyinchilar[Maindata.GroupNumber].Substring(m, 1))]; }
        }
        // GruppadagiAktivOdamlarSoni[Maindata.GroupNumber] = GruppadagiAktivOdamlarSoni[Maindata.GroupNumber] + 1;
        PlayerdaKartaniTarqatish($data, $kil, $GroupNumber,$index,Tekshir($GroupNumber));





            function PlayerdaKartaniTarqatish($data,$ass3,$lk,$index,$sonide)
    {
        $ass2 = $ass3;
        $minSatck = TurnLk($lk);
        //Gruppalaga ajratiganda
        // NechtasiBorliginiAniqlash(lk);

        //ChiqqanBusaChiqaribYuborish(lk);


       // return $data.$index.$ass2;


        if ($sonide == 2 && $lk <= 2100 )
        {
            YurishAsosiy($lk, $minSatck, 2);
        }

        //Turnir
        if ($lk > 2000)
        {
            if ($lk % 2 == 0)
            {
                if ($sonide == 5)
                {
                  YurishAsosiy($lk, $minSatck, 5);
                }
            }
            else
            {

                if ($sonide == 9)
                {
                   YurishAsosiy($lk, $minSatck, 9);
                }
            }
        }
    }


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
        $Id = "";
        $Level = "";
        $Money = "";
        $yol = "";    $Name = "";
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
                            uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol);
                        }
                    }
                    else
                    {
                        uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol);
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
                            uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol);
                        }
                    }
                    else
                    {
                        uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol);
                    }
                }
            }
        return true;
    }




}