

<!DOCTYPE html>
<html lang="en">
<head>




    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="input"> Entrez votre pseudo :</label>
        <input type="text" id="pseudo" onkeyup="suggestNames(this.value)">
        <button type="button" id="sub"> Register</button>
    </form>

    <div id="output">

    </div>
    <div id="out">

    </div>

</body>


<script>
        function suggestNames(str){
            if(str.length == 0){
                document.getElementById("output").innerHTML = ""
            }

            else{
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("output").innerHTML = this.responseText;
                        document.getElementById("out").innerHTML = ''

                    }
                };

                xhr.open("POST", "req.php", true);
                xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                xhr.send("forminput=" + str);

            }

        }

        const a = document.getElementById("sub")
        a.addEventListener('click', func2)
        function func2() {
            let var1 = document.getElementById('pseudo').value;

            var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById("output").innerHTML = ""
                        document.getElementById("out").innerHTML = this.responseText;

                    }
                };

                xhr.open("POST", "add.php", true);
                xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                xhr.send("forminput=" + var1);
        }
    </script>

    <style>
        #output{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        #out{
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        
    </style>
</html>

