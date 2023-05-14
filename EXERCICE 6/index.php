
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
            <button id="btnGet3" type="button" onclick="fun('airplanes')">Airplanes</button>
            <button id="btnGet2" type="button" onclick="fun('airlines')">Airlines</button>
            <button id="btnGet1" type="button" onclick="fun('flights')">Flights</button>
            <button id="btnGet" type="button" onclick="fun('airports')">Airports</button>
        </form>
        <div id='resp'>
            text here
        </div>
    
</body>

<script>

        b = document.getElementById('resp')


        function fun( varb){

            
            //we will get the airports that are supported by the API 
            // we are using the XMLHttpRequest to get the data from the API
            // we are using the POST method to get the data from the API
            // your wamp server should send http request to the API not https request, otherwize it will not work.
            var xhr = new XMLHttpRequest();
            str = 'http://api.aviationstack.com/v1/'+varb+'?access_key=34467a1c3ba2394a419932b896a2fb53'
            xhr.open("POST", str , true)
            xhr.send()


            xhr.onreadystatechange = function(){
            if(this.readyState = XMLHttpRequest.DONE && this.status === 200){
                let var1 = this.responseXML;
                b.innerHTML = var1;
            }

        }

        }


        
    </script>
</html>