<!DOCTYPE html>
<html>
<head>
    <title>SnowWorld | Personeels Eten</title>
    <link rel="shortcut icon" type="image/png" href="https://www.snowworld.com/themes/snow_base_redesign/images/SnowWorld-Beeldmerk.svg"/>


    </head>
<body>

<div id="inzending" class="hidden">
    <div class="achtergrond">
        <br>
        <img class="swlogo" src="img/swlogo.png"></img><br>
        <form id="myForm" action="verstuurd.php" method="POST">
            <!-- Your form fields go here -->
            <h1>Personeels Eten - SnowWorld Rucphen</h1>
            <label>Naam</label><br>
            <input type="text" name="name" placeholder="" required><br><br><br>

            <label>Hoelaat?</label><br>
            <select id="tijd" name="tijd">
  <option value="16:00">16:00</option>
  <option value="16:15">16:15</option>
  <option value="16:30">16:30</option>
  <option value="16:45">16:45</option>
  <option value="17:00">17:00</option>
  <option value="17:15">17:15</option>
  <option value="17:30">17:30</option>
  <option value="17:45">17:45</option>
  <option value="18:00">18:00</option>
  </select><br><br><br>


            <label>Opmerking</label><br>
            <textarea type="opmerking" name="opmerking" placeholder="Bijv. 'Vegan', 'Vega' of 'Geen pinda'" row="6"></textarea><br><br>
            <button class="button-3" type="submit">Insturen</button><br><br>
            

            <p>Let op! Bij het versturen van foutieve informatie en/of onzin informatie kan het geven van avondeten geweigerd worden.</p><br><br>
        </form>
    </div>
</div>





</body>
</html>



    <script>
        // Get the current time
        var currentTime = new Date();

        // Set the start and end time for the form visibility
        var startTime = new Date();
        startTime.setHours(0, 00, 0); // Set the start time to 9:00 AM
        var endTime = new Date();
        endTime.setHours(19, 0, 0); // Set the end time to 5:00 PM

        // Check if the current time is within the specified range
        if (currentTime >= startTime && currentTime <= endTime) {
            // Show the form if the current time is within the range
            document.getElementById("inzending").classList.remove("hidden");
        }

        // Alternatively, you can use setInterval to check the time periodically
        // and update the visibility of the form accordingly.

        // Example using setInterval:
        // setInterval(function() {
        //     var currentTime = new Date();
        //     if (currentTime >= startTime && currentTime <= endTime) {
        //         document.getElementById("formContainer").classList.remove("hidden");
        //     } else {
        //         document.getElementById("formContainer").classList.add("hidden");
        //     }
        // }, 1000); // Check every second
    </script>





<style>

    body {
    background: url(img/swpersoneel.png) center center/cover no-repeat fixed;
}


    .swlogo {
        border-radius: 30px;
        width: 20%;
    }

    .hidden {
            display: none;
        }


label{
    font-family: MerriWeather;
    font-weight: bold;
    font-size: 20px;
}

p {
    font-family: MerriWeather;
    font-size: 12px;
}

h1 {
    font-family: MerriWeather;;
}

@media screen and (min-width: 768px) {
    .achtergrond {
    width: 50%;
    height: auto;
    flex-shrink: 0;
    border-radius: 25px;
    background: #D9D9D9;
    text-align: center;
    margin: auto;
    margin-top: 40px;
    margin-bottom: 40px !important;
    }

    textarea {
  width: 50%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 30px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

input {
    width: 50%;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 30px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}


select {
  width: 50%;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 30px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}


}

@media screen and (max-width: 768px) {
    .achtergrond {
    width: 90%;
    height: auto;
    flex-shrink: 0;
    border-radius: 25px;
    background: #D9D9D9;
    text-align: center;
    margin: auto;
    margin-top: 40px;
    margin-bottom: 40px !important;
    }

    textarea {
  width: 90%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 30px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

input {
    width: 90%;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 30px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}


select {
  width: 90%;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 30px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

}



/* CSS */
.button-3 {
  appearance: none;
  background-color: #eb6157;
  border: 1px solid rgba(27, 31, 35, .15);
  border-radius: 6px;
  box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
  font-size: 25px;
  font-weight: 600;
  line-height: 20px;
  padding: 6px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: middle;
  white-space: nowrap;
  width: 200px;
  height: 50px;
}

.button-3:focus:not(:focus-visible):not(.focus-visible) {
  box-shadow: none;
  outline: none;
}

.button-3:hover {
  background-color: #cf574e;
}

.button-3:focus {
  box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
  outline: none;
}

.button-3:disabled {
  background-color: #94d3a2;
  border-color: rgba(27, 31, 35, .1);
  color: rgba(255, 255, 255, .8);
  cursor: default;
}

.button-3:active {
  background-color: #298e46;
  box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
}




</style>