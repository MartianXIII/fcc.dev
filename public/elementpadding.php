<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adjusting Element Padding</title>
    <style media="screen">
      .injected-text {
        margin-bottom: -25px;
        text-align: center;
      }

      .box {
        border-style: solid;
        border-color: black;
        border-width: 5px;
        text-align: center;
      }

      .yellow-box {
        background-color: yellow;
        padding: 10px;
      }

      .red-box {
        background-color: red;
        padding: 20px;
      }

      .green-box {
        background-color: green;
        padding: 20px;
        margin: 20px;
      }

    </style>
  </head>
  <body>
    <h5 class="injected-text">margin</h5>

      <div class="box yellow-box">
        <h5 class="box red-box">padding</h5>
        <h5 class="box green-box">padding</h5>
      </div>
    <!--Adjusting the Padding of an Element 45-->
    <!--Adjusting the Margin of an Element 46-->
  </body>
</html>
