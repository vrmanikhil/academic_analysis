<!DOCTYPE html>
<?=$head?>

<div class="container">
    <div class="row" style="padding: 20px;">

            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php echo $left; ?>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">

                <h3>SCORE PREDICTION FOR NEXT YEAR (ATTENDANCE)</h3>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Attendance</label>
                        <input type="number" class="form-control" max="50" name="attendance" id="attendance">
                    </div>
                </div>
                <button class="btn btn-default" style="flaot:right;" onclick="myFunction()">Get External Score</button>
                <input type="hidden" name="m" id="m" value=<?php echo $m; ?>>
                <input type="hidden" name="c" id="c" value=<?php echo $c; ?>>
<p id=predicted_score></p>

<script>
  var m = document.getElementById("m").value;
  var c = document.getElementById("c").value;
        function myFunction() {

          var y = document.getElementById("attendance").value;
          if (y>100){
            alert("Maxiumum Attendance should be less than or equal to 100")
          }
          else{
          var x = (y-c)/m;
          document.getElementById("predicted_score").innerHTML = "The predicted external score is: " + x;}
}

</script>




            </div>


    </div>
</div>


<?=$foot?>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

     <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap.min.js"></script>



</body>
</html>
