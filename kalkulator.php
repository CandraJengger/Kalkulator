
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .container{
            position: relative;
            height: 100vh;
            background-image: linear-gradient(90deg, salmon, violet, lightskyblue);
            
        }
        .container .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 420px;
            background-color: rgba(0, 0, 0, 0.0);    
            box-sizing: border-box;
            padding: 10px;
            
        }
        .container .content .text {
            margin-bottom: 5px;
        }
        .container .content .text input {
            width: 100%;
            height: 45px;
            font-size: 22px;
            padding-right: 10px;
            text-align: right;
            box-sizing: border-box;
            outline: none;
            border: none;
        }
        .container .content .btn {
            display: inline-block;
            width: 130px;
            height: 130px;
            background: #333 ;
            color: #fff;
            font-size: 30px;
            cursor: pointer;
            text-align: center;
            line-height: 130px;
            transition: 0.3s;
            border: none;
        }
        .container .content .btn:hover {
            background: #0e0e0e;
        }

        .container .content .row-one,
        .container .content .row-two,
        .container .content .row-three {
            font-family: sans-serif;
            margin-bottom: 5px;
        }
        .container .content .row-three {
            display:flex;
        }
        .container .content .row-three .btn {
            flex:1;
            margin-top: 5px;
            margin-right: 3px;
        }
        .container .content .row-three .output {
            flex:2;
            height: 130px;
            width: 260px;
            background: #fff;
            font-size: 30px;
            display:inline-block;
            margin: 5px 2px 5px ;
            box-sizing:border-box;
            color:#000;
            text-align:center;
            line-height:130px;
        }
    </style>
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script languange="text/javascript">
        function Angka(evt) {
            let charCode = (evt.which) ? evt.which : event.keyCode
            if(charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
        function Tambah() {
            $(".output").load("Tambah.php",
            $("form").serializeArray());
        }
        function Kurang() {
            $(".output").load("Kurang.php",
            $("form").serializeArray());
        }
        function Kali() {
            $(".output").load("Kali.php",
            $("form").serializeArray());
        }
        function Bagi() {
            $(".output").load("Bagi.php",
            $("form").serializeArray());
        }
        function Modulus() {
            $(".output").load("Modulus.php",
            $("form").serializeArray());
        }
        function LebihSama() {
            $(".output").load("LebihSama.php",
            $("form").serializeArray());
        }
        function TidakSama() {
            $(".output").load("TidakSama.php",
            $("form").serializeArray());
        }
    </script>
</head>
<body>
    <div class="container">
        <form name="form">
            <div class="content">
                <div class="text">
                    <input type="text" name="a" id="a" onkeypress= "return Angka(event)">
                </div>
                <div class="text">
                    <input type="text" name="b" id="b" onkeypress= "return Angka(event)">
                </div>
                <div class="row-one">
                    <label>
                    <input type="hidden" name="tambah" value="1">
                        <input class="btn" type="button" value="+" onclick="Tambah()">
                    </label>
                    <label>
                        <input type="hidden" name="kurang"value="1">
                        <input class="btn"   type="button" value="-" onclick="Kurang()">
                    </label>
                    <label>
                        <input type="hidden" name="kali" value = "1">
                        <input class="btn"   type="button" value="x" onclick="Kali()">
                    </label>
                </div>
                <div class="row two">
                    <label>
                        <input type="hidden" name="bagi" value = "1">
                        <input class="btn" type="button" value="/" onclick="Bagi()">
                    </label>
                    <label>
                        <input type="hidden" name="modulus" value = "1">
                        <input class="btn"   type="button" value="%" onclick="Modulus()">
                    </label>
                    <label>
                        <input type="hidden" name="lebihSama" value = "1">
                        <input class="btn"   type="button" value=">=" onclick="LebihSama()"> 
                    </label>
                </div>
                <div class="row-three">
                    <label>
                        <input type="hidden" name="tidakSama" value = "1">
                        <input class="btn"   type="button" value="!=" onclick="TidakSama()">
                    </label>
                    <span class="output"></span>
                </div> 
            </div>
        </form>
    </div>
</body>
</html>

