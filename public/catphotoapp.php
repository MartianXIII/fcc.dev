<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cat Photo App</title>
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<style>
  .red-text {
    color: red;
  }

  h2 {
    font-family: Lobster, Monospace;
  }

  p {
    font-size: 16px;
    font-family: Monospace;
  }

  .thick-green-border {
    border-color: green;
    border-width: 10px;
    border-style: solid;
    border-radius: 50%;
  }

  .smaller-image {
    width: 100px;
  }

  .gray-background {
    background-color: gray;
  }

  #cat-photo-form {
    background-color: green;
  }

</style>

  </head>
  <body>
    <div class="container-fluid">

    <h2 class="red-text text-center">CatPhotoApp</h2>
    <p>Click her here for <a href="#">cat photos</a>.</p>
    <a href="#"><img class="smaller-image thick-green-border"
       alt="A cute orange cat lying on its back"
       src="https://bit.ly/fcc-relaxing-cat"/></a>
       <img class="img-responsive"src="http://bit.ly/fcc-running-cats" alt="">
       <button class="btn">Like</button>

  <div class="gray-background">
    <p>Things cats Love:</p>
    <ul>
      <li>cat nip</li>
      <li>laser pointers</li>
      <li>lasagna</li>
    </ul>
    <p>Top 3 things cats dislike:</p>
    <ol>
      <li>flea treatment</li>
      <li>thunder</li>
      <li>other cats</li>
    </ol>
  </div>
    <form id="cat-photo-form" action="/submit-cat-photo">
      <label><input type="radio" name="indoor-outdoor" checked/>Indoor</label>
      <label><input type="radio" name="indoor-outdoor"/>Outdoor</label>
      <label><input type="checkbox" name="personality" checked>Loving</label>
      <label><input type="checkbox" name="personality">Lazy</label>
      <label><input type="checkbox" name="personality">Energetic</label>
      <input type="text" placeholder="cat photo URL" required>
      <button class="btn btn-block btn-primary" type="submit">Submit</button>
      <button text="info" class=" btn btn-info btn-block">Info</button>
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

  </body>
</html>
