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
        <img class="swlogo" src="img/swlogo.png"></img><br><br>
        <div class="overzicht">
        

        <?php

require 'connect.php';

// Establish a database connection (similar to submit.php)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the submissions table
$result = $conn->query("SELECT * FROM `submissions` ORDER BY tijd ASC");

// Display data in a table
echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Tijd</th>
        <th>Opmerking</th>
        <th>Timestamp</th>
    </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["tijd"] . "</td>
        <td>" . $row["opmerking"] . "</td>
        <td>" . $row["tijdinzending"] . "</td>
    </tr>";
}

echo "</table><br>
<p>© Copyright Dylano Valentijn<br><br>";

$conn->close();
?>

</div>

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

label {
    font-family: MerriWeather;
    font-weight: bold;
    font-size: 20px;
}

p {
    font-family: MerriWeather;
    font-size: 12px;
}

@media screen and (min-width: 768px) {
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

<style>
    td,
th {
  border: 1px solid rgb(190, 190, 190);
  padding: 10px;
}

td {
  text-align: center;
}

tr:nth-child(even) {
  background-color: #eee;
}

th[scope='col'] {
  background-color: #696969;
  color: #fff;
}

th[scope='row'] {
  background-color: #d7d9f2;
}

caption {
  padding: 10px;
  caption-side: bottom;
}

table {
  border-collapse: collapse;
  border: 2px solid rgb(200, 200, 200);
  letter-spacing: 1px;
  font-family: sans-serif;
  font-size: 1.8rem;
  margin: auto;
}

.overzicht {
  margin: 10px;
}

    </style>