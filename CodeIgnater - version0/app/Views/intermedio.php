<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            align-items: flex-start;
            min-height: 100vh;
            background-color: #0D0076;
        }

        .center {
            margin: 0 auto;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .center > h1 {
            margin-top: 10rem;
            margin-bottom: -8rem;
            font-family: 'Amatic SC', cursive;
            font-size: 2.3rem;
            letter-spacing: 3px;
            color: white;
            animation: nimate 2s infinite;
            transition: 2s;
        }

        @keyframes nimate {
            0% {
                font-weight: 900;
            }
            100% {
                font-weight: 100;
            }
        }

        .flexTwoBox {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            align-items: center;
            margin: 10rem auto;
        }

        img {
            max-width: 100%;
        }

        .imgTelam {
            width: 50%;
            margin-left: 3rem;
        }

        @media screen and (max-width: 1135px) { 
            .imgTelam {
                width: 60%;
            }
        }


        .container {
            width: 600px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-top: 4rem;
        }

        @media screen and (max-width: 1295px) { 
            .container {
                margin-top: 0px;
            }
        }


        @media screen and (max-width: 730px) { 
            .container {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }


        .container .btn {
            position: relative;
            width: 150px;
            height: 50px;
            margin: 30px 20px 4rem 20px;
        }


        .container .btn a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.05);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            color: #fff;
            z-index: 1;
            font-weight: 400;
            letter-spacing: 1px;
            text-decoration: none;
            overflow: hidden;
            transition: 0.4s;
            -webkit-transition: 0.4s;
            -moz-transition: 0.4s;
            -ms-transition: 0.4s;
            -o-transition: 0.4s;
            backdrop-filter: blur(15px);
        }


        .container .btn a:hover a {
            letter-spacing: 3px;
        }

        .container .btn a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(to left, rgba(255, 255, 255, 0.15), transparent);
            transform: skewX(45deg) translateX(0);
            -webkit-transform: skewX(45deg) translateX(0);
            -moz-transform: skewX(45deg) translateX(0);
            -ms-transform: skewX(45deg) translateX(0);
            -o-transform: skewX(45deg) translateX(0);
            transition: 0.4s;
            -webkit-transition: 0.4s;
            -moz-transition: 0.4s;
            -ms-transition: 0.4s;
            -o-transition: 0.4s;
        }


        .container .btn:hover a::before {
            transform: skewX(45deg) translateX(200%);
            -webkit-transform: skewX(45deg) translateX(200%);
            -moz-transform: skewX(45deg) translateX(200%);
            -ms-transform: skewX(45deg) translateX(200%);
            -o-transform: skewX(45deg) translateX(200%);
        }


        .container .btn::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            bottom: -5px;
            width: 30px;
            height: 10px;
            background: #f00;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
            transition: 0.4s;
            -webkit-transition: 0.4s;
            -moz-transition: 0.4s;
            -ms-transition: 0.4s;
            -o-transition: 0.4s;
            transition-delay: 0s;
        }

        .container .btn:hover::before {
            bottom: 0;
            height: 50%;
            width: 80%;
            border-radius: 30px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            transition-delay: 0.4s;
        }


        .container .btn::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            top: -5px;
            width: 30px;
            height: 10px;
            background: #f00;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            -ms-border-radius: 10px;
            -o-border-radius: 10px;
            transition: 0.4s;
            -webkit-transition: 0.4s;
            -moz-transition: 0.4s;
            -ms-transition: 0.4s;
            -o-transition: 0.4s;
            transition-delay: 0s;
        }

        .container .btn:hover::after {
            top: 0;
            height: 50%;
            width: 80%;
            border-radius: 30px;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            transition-delay: 0.4s;
        }


        .container .btn:nth-child(1)::before,
        .container .btn:nth-child(1)::after {
            background: #935AEB;
            box-shadow: 0 0 5px #935AEB,
            0 0 15px #935AEB,
            0 0 30px #935AEB,
            0 0 60px #935AEB;
        }


        .container .btn:nth-child(2)::before,
        .container .btn:nth-child(2)::after {
            background: #2bd2ff;
            box-shadow: 0 0 5px #2bd2ff,
            0 0 15px #2bd2ff,
            0 0 30px #2bd2ff,
            0 0 60px #2bd2ff;
        }


        .container .btn:nth-child(3)::before,
        .container .btn:nth-child(3)::after {
            background: #1eff45;
            box-shadow: 0 0 5px #1eff45,
            0 0 15px #1eff45,
            0 0 30px #1eff45,
            0 0 60px #1eff45;
        }


        .container .btn:nth-child(4)::before,
        .container .btn:nth-child(4)::after {
            background: #ff1f71;
            box-shadow: 0 0 5px #ff1f71,
            0 0 15px #ff1f71,
            0 0 30px #ff1f71,
            0 0 60px #ff1f71;
        }
    </style>
</head>

<body>
    <div class="center">
        <h1>Ingrese al controlador del juego:</h1>
        <?php echo session('usuario'); ?>
        <div class="flexTwoBox">
            <div class="imgTelam"> <img src="../css/img/telam.jpg" alt="img telam"> </div>
        
            <div class="container">
                <div class="btn"><a href="">key_value</a></div>
                <div class="btn"><a href="">key_value</a></div>
                <div class="btn"><a href="h">key_value</a></div>
                <div class="btn"><a href="<?php echo base_url('/salir');?>">Salir</a></div>
            </div>
        </div>
    </div>
</body>
</html>