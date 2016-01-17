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
</style>

  </head>
  <body>
    <h2 class="red-text">CatPhotoApp</h2>
    <p>Click her here for <a href="#">cat photos</a>.</p>
    <a href="#"><img class="smaller-image thick-green-border" alt="A cute orange cat lying on its back"src="https://bit.ly/fcc-relaxing-cat"/></a>
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
    <form  action="/submit-cat-photo">
      <input type="text" placeholder="cat photo URL">
    </form>
  </body>
</html>
