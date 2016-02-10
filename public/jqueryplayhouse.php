<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jquery PlayGround</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>

  </head>
  <body>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Only change code above this line. -->
    <script>
      $(document).ready(function() {
        // $("button").addClass("animated bounce");
        // $(".well").addClass("animated shake");
        // $("#target3").addClass("animated fadeOut");
        // $('button').addClass("animated");
        // $('.btn').addClass("shake");
        // $('#target1').addClass("btn-primary");
        // $('button').removeClass("btn-default");
        $('#target1').css("color", "red");
        $('#target1').prop("disabled", "true");
        $('#target4').html("<i>#target4</i>");
        $('#target4').remove();
        $('#target2').appendTo("#right-well");

      });
    </script>

    <div class="container-fluid">
      <h3 class="text-primary text-center">jQuery Playground</h3>
      <div class="col-xs-6">
          <h4>#left-well</h4>
          <div class="well" id="left-well">
            <button class="btn btn-default target" id="target1">#target1</button>
            <button class="btn btn-default target" id="target2">#target2</button>
            <button class="btn btn-default target" id="target3">#target3</button>
          </div>
        </div>
        <div class="col-xs-6">
          <h4>#right-well</h4>
          <div class="well" id="right-well">
            <button class="btn btn-default target" id="target4">#target4</button>
            <button class="btn btn-default target" id="target5">#target5</button>
            <button class="btn btn-default target" id="target6">#target6</button>
          </div>
        </div>
      </div>
      </div>
    </div>


      <!--JQuery Playhouse BootStrap-->

      <!--Create a Bootstrap Headline 01-->
      <!--House our page within a Bootstrap Container Fluid Div 02-->
      <!--Create a Bootstrap Row 03-->
      <!--Split your Bootstrap Row 04-->
      <!--Create Bootstrap wells 05-->
      <!--Add Elements within your Bootstrap Wells 06-->
      <!--Apply the default Bootstrap Button Style 07-->
      <!--Create a Class to Target with Jquery Selectors 08-->
      <!--Add ID Attributes to Bootstrap Elements 09-->
      <!--Label Bootstrap Wells 10-->
      <!--Give Each Element a Unique ID 11-->
      <!--Label Bootstrap Buttons 12-->
      <!--Use Comments to Clarify Code 13-->
      <!--News ... etc 14-->

      <!--JQuery Playhouse -->
      <!--Learn how Script tags && Document Ready Work 14-->
      <!--Target HTML Elements with Selectors Using JQuery 15-->
      <!--Target Elements by Class Using JQuery 16-->
      <!--Target Elements by ID Using JQuery 17-->
      <!--Delete your JQuery Functions 18-->
      <!--Target the same element with multiple JQuery Selectors 19-->
      <!--Remove Classes from an element with JQuery 20-->
      <!--Change the CSS of an Element Using Query 21-->
      <!--Disable an Element Using JQuery 22-->
      <!--Change Text Inside an Element Using Jquery 23-->
      <!--Remove an Element Using JQuery 24-->
      <!--Use appendTo to Move Elements with JQuery 25-->
      <!-- 26-->


  </body>
</html>
