

<!DOCTYPE html>
<html lang="en">
<head>


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

                    }
                };

                xhr.open("POST", "req.php", true);
                xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
                xhr.send("forminput=" + str);

            }

        }

    function func(){
        console.log(event.target.value)
        let rep = document.getElementById("output").value



        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("texte").innerHTML = this.responseText;

            }
        };

        xhr.open("POST", "details.php", true);
        xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
        xhr.send("forminput=" + rep);
    }


    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="input"> entrez le nom de la ville </label>
        <input type="text" id="input" onkeyup="suggestNames(this.value)">
    </form>

<select class="sel" id="output" onchange="func()">
</select>

<div id="texte" class="texte">
LES INFORMATIONS RELATIVES AUX VILLES APPARAITERONT ICI :
</div>
</body>

<style>
    .texte{
        border: 1px solid black;
        margin: 10px;
        padding: 10px;
        width: 600px;

    }

    .sel{
        width: 100px;
    }
</style>

</html>

