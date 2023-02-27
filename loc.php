
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KnowYourLocation</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
          }
        .bg
        {
            background-image: url("https://cdn.pixabay.com/photo/2021/07/03/16/04/sunrise-6384297_960_720.png");
            background-size: cover;
            height: 100%;
            background-position: top;
            background-repeat: no-repeat;
            text-align: center;
            color: aliceblue;
            font-size: 35px;
        }
        .bg,.p{
            font-size: medium;
            font-family: cursive;
        }
        .res
        {
            font-size: 30px;
            margin-top: 50px;
            background-color: 00FFFFFF;

        }
        
        
    </style>
</head>
<body>
    <div class="bg" >
        <h1>KnowYourLocation</h1>
        <br>
        <br>
        <p>Click the below button to know your location</p>
        <form action="./loc.php" method="get">

         <button type="submit" class="btn btn-primary">ClickMe</button>
         <br><br>
         <div class="res">
            <h2>Your location is :</h2>
         <?php
             $ch=curl_init();
            curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json/");
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $result =curl_exec($ch);
            $result =json_decode($result);
            

            if($result->status=='success')
            {
                
                echo "Country:".$result->country.' <br/>';
                echo "State :".$result->regionName.' <br/>';
                echo "District:".$result->city.' <br/>';
                echo "Latitude:".$result->lat.' <br/>';
                echo "Longitude :".$result->lon.' <br/>';
                

            }
        ?>
        </div>

        </form>
    </div>
   
</body>
</html>