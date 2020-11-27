<?php

require_once __DIR__ . '/db-connect.php';
require_once 'header.php';
ini_set('display_errors', 0);

?>

    <body class="container">
        <div class="align-self-center" style="margin: auto">
            <h3>Overview</h3>
                <ul style="list-style-type:circle;">
                    <li>Main task - Listening</li>
                    <li>Second task - Essay</li>
                    <li>Third task</li>
                    <li>Fourth task</li>
                </ul>
            <form action="apis/api-save-timestamp.php" method="post">
                <button id="btnTimestamp" name="timestamp" class="btn-info click">Start</button>
            </form>
            You have
            <div id="timer"></div> seconds
            to memorize these tasks
        </div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
<script>
    var seconds=5;
    var timer;
    function myFunction() {
        if(seconds < 60) { //I want it to say 1:00, not 60
            document.getElementById("timer").innerHTML = seconds;
        }
        if (seconds > 0 ) { // so it doesn't go to -1
            seconds--;
        } else {
            clearInterval(timer);
            document.getElementById('btnTimestamp').click();
        <?php /*header("refresh:60;url=sem-project/write-essay.php");*/?>
        }
    }
    window.onload = function() {
        if(!timer) {
            timer = window.setInterval(function() {
                myFunction();
            }, 1000); // every second
        }
    }

    document.getElementById("timer").innerHTML="1:00";
</script>