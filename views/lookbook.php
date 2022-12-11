<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lookbook</title>
    <style>
        .lookbook {
            margin-top: 100px;
            padding: 10px;
            display:flex;
            justify-content: center;
            text-align: center;
        }
        .wrapper{
            margin: 5px;
        }
        img{
            width: 200px;
        }

        img:hover{
            width:250px;
        }

        @media screen and (max-width: 900px) {
            .lookbook {
                margin-top: 150px;
            }
        }
    </style>
</head>

<body>
    <div class="lookbook">
        <div class="wrapper">
            <img src="https://static.zara.net/photos///2023/W/1/1/p/2337/010/202/2/w/750/2337010202_6_1_1.jpg?ts=1667908929016" width="200px">
            <p>Price: R 1000</p>

            <form action='' method='get'>
                <input type='hidden' name='carId' value='" . $heel->getId() . "'>
                <button type='submit' name='viewCar' value='true'>View</button>
            </form>

        </div>

        <div class="wrapper">
            <img src="https://static.zara.net/photos///2023/W/1/1/p/2337/010/202/2/w/750/2337010202_6_1_1.jpg?ts=1667908929016" width="200px">
            <p>Price: R 1000</p>
            
            <form action='' method='get'>
                <input type='hidden' name='carId' value='" . $heel->getId() . "'>
                <button type='submit' name='viewCar' value='true'>View</button>
            </form>

        </div>
        <div class="wrapper">
            <img src="https://static.zara.net/photos///2023/W/1/1/p/2337/010/202/2/w/750/2337010202_6_1_1.jpg?ts=1667908929016">
            <p>Price: R 1000</p>
            
            <form action='' method='get'>
                <input type='hidden' name='carId' value='" . $heel->getId() . "'>
                <button type='submit' name='viewCar' value='true'>View</button>
            </form>

        </div>

    </div>
</body>

</html>