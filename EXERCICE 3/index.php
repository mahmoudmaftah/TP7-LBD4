
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
            <input type="text"  id="city">
            <button id="btnGet" type="button">SUBMIT</button>
        </form>
        <div id='resp'>
            text here
        </div>
    
</body>

<script>


        let a = document.getElementById("btnGet")

        b = document.getElementById('resp')
        a.addEventListener('click', fun)


        function fun(){

            let a = document.getElementById("btnGet")
            let c = document.getElementById("city")

            let city = c.value
            console.log(city)
            
            let key = '44fd01b37c2d99714f0bd3f6b568428f';
            let url2 = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${key}`



            

            var xhr = new XMLHttpRequest();
            xhr.open("GET", url2, true)
            xhr.send()

            xhr.onreadystatechange = function(){
            if(this.readyState = XMLHttpRequest.DONE && this.status === 200){
                b.innerHTML = this.responseText;
                console.log(this.responseText)
            }

        }

        }


        
    </script>

    <style>

        

        #resp{
            border: 1px solid black;
            width: 200px;
            height: 200px;
        }


    </style>
</html>