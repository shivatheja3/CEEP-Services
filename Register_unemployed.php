<?php
header("X-Frame-Options: DENY");
header("Content-Security-Policy: frame-ancestors 'none'", false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Registrations</title>
    <style>
        body{
            background-image: url('https://c.neh.tw/thumb/f/720/comrawpixel2307598.jpg');
            background-size: 700px 550px;
            background-attachment: fixed;
        }
        #carpentry_form{
            width:800px;
            height:900px;
            background-color:white;
            position: relative;
            left:350px;
            top:50px;
        }
        #carpentry_form_1{
            padding:3em;
        }
        #name_field{
            line-height: 3em;
            border:none;
            width:620px;
        }
        .input-icon{
            font-size:1.5em;
            padding:0.7em;
        }
        #part1{
            border:2px solid black;
        }
        i:hover{
            color:#f0a500;
            transition: ease-out 1s ;
        }
        #address{
            display:flex;
        }
        #block_address{
            flex:50%;
        }
        #flat_address{
            flex:50%;
        }
        #Payment{
            position: relative;
            left:300px;
        }
        input[type="radio"]{
            border:2px solid black;
            box-sizing: border-box;
        }
        #reset{
            width:150px;
            padding:2px;
        }
        #submit{
            width:150px;
            padding:2px;
        }
        #block_address{
            position: relative;
            left:100px;
            top:10px;
        }
        @media(max-width:1268px){
            #carpentry_form{
                position: relative;
                left:180px;
            }
        }
        @media(max-width:1100px){
            #carpentry_form{
                position: relative;
                left:160px;
            }
        }
        #first_h1{
            position: relative;
            left:40%;
        }
    </style>
</head>
<body>
    <h1 id="first_h1">Registrations</h1>
    <div id="carpentry_form" >
        <form action="submit_registrations.php" id="carpentry_form_1" method="POST">
            <h2>Apply Now...</h2>
            <div id="part1">
                <span class="input-icon"><i class="fa fa-user"></i></span>
            <input type="text" placeholder="Enter your name..." required id="name_field" name="customer_name">
            </div>
            <br>
            <div id="part1">
                <span class="input-icon"><i class="far fa-envelope"></i></span>
            <input type="email" placeholder="Enter your mail..." required id="name_field" name="customer_email">
            </div>
            <br>
            <br>
            <hr>
            <h2 style="position: relative;left:220px">___Address___</h2>
            <div id="address">
            <div id="interst_area">
                <label for="">Enter the area of your interest</label>
                <br>
                    <label for="">Carpentry:</label>
                    <input type="radio" value="carpentry" name="select1" required>
                    <br>
                    <label for="">Plumbing:</label>
                    <input type="radio" value="plumbing" name="select1" required>
                    <br>
                    <label for="">Electronics:</label>
                    <input type="radio" value="electronics" name="select1" required>
                    <br>
                    <label for="">Electricals:</label>
                    <input type="radio" value="electricals" name="select1" required>
                    <br>
                </div>
                <div id="block_address">
                <label for="">Enter block</label>
                <br>
                    <label for="">A:</label>
                    <input type="radio" value="A" name="select2" required>
                    <!-- <br> -->
                    <label for="">B:</label>
                    <input type="radio" value="B" name="select2" required>
                    <br>
                    <label for="">C:</label>
                    <input type="radio" value="C" name="select2" required>
                    <!-- <br> -->
                    <label for="">D:</label>
                    <input type="radio" value="D" name="select2" required>
                    <br>
                </div>
                <div id="flat_address" >
                    <input type="number" required name="flat_number" style="width:200px;height:50px;" placeholder="Enter the flat number" min="101" max="110" value="101">
                </div>
            </div>
            <hr>
            <div id="part1">
                <span class="input-icon"><i class="far fa-id-card"></i></span>
                <input type="text" name="mobile_number" placeholder="Enter your mobile number" required pattern="[0-9]{10}" id="name_field">
            </div>
            <br>
            <input type="reset" placeholder="Reset" id="reset">
            <br>
            <br>
            <input type="submit" placeholder="Submit" id="submit">
        </form>
    </div>
    <script>
    </script>
</body>
</html>