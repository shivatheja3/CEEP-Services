<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Carpentry</title>
    <style>
        body{
            background-image: url('https://img.freepik.com/free-vector/electronics-repair-horizontal-with-laptop-tv-computer_1284-27345.jpg?size=338&ext=jpg');
            background-size: 1000px 800px;
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
    </style>
</head>
<body>
    <div id="carpentry_form" >
        <form action="submit_electronics.php" id="carpentry_form_1" method="POST">
            <h2>Apply Now...</h2>
            <div id="part1">
                <span class="input-icon"><i class="fa fa-user"></i></span>
            <input type="text" placeholder="Enter your name" required id="name_field" name="customer_name">
            </div>
            <br>
            <div id="part1">
                <span class="input-icon"><i class="far fa-envelope"></i></span>
            <input type="email" placeholder="Enter your mail" required id="name_field" name="customer_email">
            </div>
            <br>
            <br>
            <hr>
            <h2 style="position: relative;left:220px">___Address___</h2>
            <div id="address">
                <div id="block_address">
                    <label for="">A:</label>
                    <input type="radio" value="A" name="select1" >
                    <label for="">B:</label>
                    <input type="radio" value="B" name="select1" >
                    <label for="">C:</label>
                    <input type="radio" value="C" name="select1" >
                    <label for="">D:</label>
                    <input type="radio" value="D" name="select1" >
                </div>
                <div id="flat_address" >
                    <input type="number" name="flat_number" style="width:200px;height:50px;" placeholder="Enter the flat number" min="101" max="110">
                </div>
            </div>
            <hr>
            <div id="part1">
                <span class="input-icon"><i class="far fa-id-card"></i></span>
                <input type="text" name="mobile_number" placeholder="Enter your mobile number" required pattern="[0-9]{10}" id="name_field">
            </div>
            <br>
            <br>
            <h2 style="position: relative;left:220px">___Payment___</h2>
            <div id="Payment">
                <input type="radio" value='offline' name="payment" id="a_a">Offline
                <br>
                <input type="radio" value='online' name="payment" id="a_b">Online
                <pre style="position: relative;left:-200px;" id="ps">
                    
                </pre>
            </div>
            <input type="reset" placeholder="Reset" id="reset">
            <br>
            <br>
            <input type="submit" placeholder="Submit" id="submit">
        </form>
    </div>
    <script>
        const ele=document.createElement('pre');
        ele.innerText='Service charge is 500 rupees .Further charges are made on the basis of work';
        ele.style.position="relative";
        ele.style.left="-230px";
        ele.style.backgroundColor="yellow";
        ele.style.width="600px";
        const ele1=document.createElement('pre');
        ele1.innerText='Online Services are not available please check offline and submit';
        ele1.style.position="relative";
        ele1.style.left="-200px";
        ele.style.width="600px";
        ele1.style.backgroundColor="yellow";
        const a1=document.querySelector("#a_a");
        const a2=document.querySelector("#a_b");
        const a3=document.querySelector("#Payment");
        a_a.checked=false;
        a_b.checked=false;
        a1.addEventListener('click',function(){
            a3.appendChild(ele);
            a3.removeChild(ele1);
        });
        a2.addEventListener('click',function(){
            a3.removeChild(ele);
            a3.appendChild(ele1);
        });
    </script>
</body>
</html>