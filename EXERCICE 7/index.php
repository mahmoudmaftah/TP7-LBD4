<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>





    <script>
        let varb = document.getElementById("result");
    function show(info) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                dash.innerHTML = "";
                let result = JSON.parse(this.responseText);
                result.data.forEach(element => {
                    let inter = document.createElement("img");
                    inter.src = element.images.original.url;
                    //inter.src = element.embed_url;
                    varb.appendChild(inter);
                    
                });
            }
        };

        xhr.open("POST", "https://api.giphy.com/v1/stickers/search?api_key=nxsb5j7hG86NWxFJmsK6mXRhpnVhbkmC&q=" + info, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send();


    }


    </script>



    <label for="">Search: </label>
    <input type="text" name="srch" onkeyup="show(this.value)">
    <div id="result"></div>
    
</body>

<style>
    img {
        width: 200px;
        height: 200px;
    }

    #result {
        display: flex;
        flex-wrap: wrap;
    }

    input {
        width: 100%;
        height: 30px;
    }

    label {
        font-size: 20px;
    }

    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    div {
        width: 100%;
    }

    @media only screen and (min-width: 600px) {
        #result {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    }
</style>
</html>