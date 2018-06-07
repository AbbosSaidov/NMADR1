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


            if ($BotOrClient != "false")
            {
              //  c.ClientId = ki.ToString();
              //  c.clientImageNumber = MainData.ImageNumber;
              //  c.clientMoney = int.Parse(MainData.Money);
              //  print(c.clientMoney.ToString());
            }

            // c.ClientId = data.Substring(3, 10);
            //c.clientImageNumber = data.Substring(33, 2);
            //c.clientMoney = int.Parse(data.Substring(21, 12));

            if (MainData.Id == "0000000000")
            {


                playerPul = new List<character>();
                //uqish uchun jsonni
                JsonString = File.ReadAllText(Application.dataPath + "/Users.json");//bu string
                                                                                    //print(JsonString);

                ItemData = JsonMapper.ToObject(JsonString);

                Id = ItemData.Count + 1;
                ki = Id;
                if (MainData.BotOrClient != "false")
                {
                    c.ClientId = ki.ToString().PadLeft(10, '0');

                }


                for (int i = 0; i < ItemData.Count; i++)
                {
                    character player2 = new character(ItemData[i]["Schot"].ToString(), ItemData[i]["id"].ToString(), ItemData[i]["trueOrFalse"].ToString(), ItemData[i]["trueOrFalse2"].ToString());

                    playerPul.Add(player2);
                }
                character player22 = new character("0", ki.ToString().PadLeft(10, '0'), "false", "false");

                playerPul.Add(player22);

                string dad = JsonMapper.ToJson(playerPul);
                ItemData = JsonMapper.ToObject(dad);

                print(ItemData.ToJson());

                File.WriteAllText(Application.dataPath + "/Users.json", ItemData.ToJson().ToString());
            }
            if (MainData.BotOrClient != "false")
            {
                BRoadFor("Jiklo" + ki.ToString().PadLeft(10, '0'), c);
            }
            else
            {
                OnIncomBot("Jiklo" + ki.ToString().PadLeft(10, '0'), int.Parse(MainData.BotlistNumber));
            }

        return 0;
    }






}