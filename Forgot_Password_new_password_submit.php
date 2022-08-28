<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #input_1 {
        position: relative;
        left: 40.5%;
        width: 20%;
        height: 30px;
    }

    #input_2 {
        position: relative;
        left: 40.5%;
        width: 20%;
        height: 30px;
    }

    #input_3 {
        position: relative;
        left: 47%;
        border-radius: 5px;
    }

    body {
        border-width: 5px;
        border-color: black;
        border-style: solid;
        height: 700px;
        border-radius: 10px;
        background-color: gray;
    }

    p {
        position: relative;
        left: 40.5%;
    }
</style>

<body>
    <form action="Forgot_Password_validate.php" method="POST">
        <input name="password" id="input_1" type="password" placeholder="Enter New Password" required
            oninput="checkPass(this.value)">
        <br>
        <p id="pops1"></p>
        <p id="pops2"></p>
        <p id="pops3"></p>
        <p id="pops4"></p>
        <br>
        <input name="confirm_password" id="input_2" type="password" placeholder="Enter New Password once again"
            required>
        <br>
        <br>
        <button id="input_3">
            Submit
        </button>
    </form>
    <script>
        function checkPass(val) {
            let $c_capital = 0;
            let $c_small = 0;
            let $c_special = 0;
            let $c_number = 0;
            for ($i = 0; $i < val.length; $i++) {
                if (val.charCodeAt($i) >= 65 && val.charCodeAt($i) <= 90) {
                    $c_capital++;
                }
                else if(val.charCodeAt($i) >= 97 && val.charCodeAt($i) <= 122){
                    $c_small++;
                }
                else if(val.charCodeAt($i) >= 48 && val.charCodeAt($i) <= 57){
                    $c_number++;
                }
                else{
                    $c_special++;
                }
            }
            if ($c_capital == 0) {
                document.getElementById("pops1").innerHTML = "Atleast one capital letter";
            }
            else {
                document.getElementById("pops1").innerHTML = "";
            }
            if ($c_small == 0) {
                document.getElementById("pops2").innerHTML = "Atleast one capital letter";
            }
            else {
                document.getElementById("pops2").innerHTML = "";
            }
            if ($c_number == 0) {
                document.getElementById("pops3").innerHTML = "Atleast one number";
            }
            else {
                document.getElementById("pops3").innerHTML = "";
            }
            if ($c_special == 0) {
                document.getElementById("pops4").innerHTML = "Atleast one special character";
            }
            else {
                document.getElementById("pops4").innerHTML = "";
            }
            if($c_small>0&&$c_capital>0&&$c_number>0&&$c_special>0){
                document.getElementById("input_3").disabled=false;
            }
            else{
                document.getElementById("input_3").disabled=true;
            }
        }
    </script>
</body>

</html>