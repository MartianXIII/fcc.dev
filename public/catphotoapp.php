<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cat Photo App</title>
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <style>
      h2 {
        font-family: Lobster, Monospace;
      }

      .thick-green-border {
        border-color: green;
        border-width: 10px;
        border-style: solid;
        border-radius: 50%;
      }
    </style>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-8">
          <h2 class="text-primary text-center">CatPhotoApp</h2>
        </div>
        <div class="col-xs-4">
          <a href="#"><img class="img-responsive thick-green-border" src="https://bit.ly/fcc-relaxing-cat"></a>
        </div>
      </div>
      <img src="http://bit.ly/fcc-running-cats" class="img-responsive">
      <div class="row">
        <div class="col-xs-4">
          <button class="btn btn-block btn-primary"><i class="fa fa-thumbs-up"></i> Like</button>
        </div>
        <div class="col-xs-4">
          <button class="btn btn-block btn-info">Info</button>
        </div>
        <div class="col-xs-4">
          <button class="btn btn-block btn-danger">Delete</button>
        </div>
      </div>
      <p>Things cats <span class="text-danger">love:</span></p>
      <ul>
        <li>cat nip</li>
        <li>laser pointers</li>
        <li>lasagna</li>
      </ul>
      <p>Top 3 things cats hate:</p>
      <ol>
        <li>flea treatment</li>
        <li>thunder</li>
        <li>other cats</li>
      </ol>
      <form action="/submit-cat-photo">
        <label><input type="radio" name="indoor-outdoor"> Indoor</label>
        <label><input type="radio" name="indoor-outdoor"> Outdoor</label>
        <label><input type="checkbox" name="personality"> Loving</label>
        <label><input type="checkbox" name="personality"> Lazy</label>
        <label><input type="checkbox" name="personality"> Crazy</label>
        <input type="text" placeholder="cat photo URL" required>
        <button type="submit">Submit</button>
      </form>
    </div>




    <!--Add button(Submit)& text submit 36-->
    <!--Add Required field in Input 37-->
    <!--Create a set of Radio Buttons 38-->
    <!--Create a set of Checkboxes 39-->
    <!--Check Radio Buttons & checkboxes by default 40-->
    <!--Nest many Elements within a single div Element 41-->
    <!--Give a Background Color to a Div Element 42-->
    <!--Set the ID of an Element 43-->
    <!--Using an ID ATTRIBUTE to style an Element 44-->


    <!--     BB OO OO TT SS TT RR AA PP .. .. MM EE HH       -->
    <!--Use Responsive Design with Bootstrap Fluid Containers 01-->
    <!--Make Images Mobile Responsive 02-->
    <!--Center Text with Bootstrap 03-->
    <!--Create a Bootstrap Button 04-->
    <!--Create a Block Element Bootstrap Button 05-->
    <!--Taste the Bootstrap Button color Rainbow 06-->
    <!--Call out Optional Actions with Button Info 07-->
    <!--Warn your Users of a Dangerous Action 08-->
    <!--Use the Bootstrap Grid to Put Elements Side by Side 09-->
    <!--Ditch Custom CSS for Bootstrap 10-->
    <!--Use Spans for Inline Elements 11-->
    <!--Create a Custom Heading 12-->
    <!--Add Font Awesome Icons to our Buttons 13-->
    <!--Add Font Awesome Icons to ALL of our Buttons 14-->


  </body>
</html>
