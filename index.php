<?
  $images = glob("images/*");
  shuffle($images);
?>
<!doctype html>

<html>
  <head>
    <meta charset="utf-8" />
    <title>wallpaper</title>
    <style>
      * {
        margin: 0 auto;
        padding: 0;
        border: none;
      }

      img {
        display: block;
        float: left;
      }
    </style>
    <script src="js/jquery-2.0.3.min.js"></script>
    <script>
      $(function() {
        var o_width  = parseInt($("img").css("width").slice(0, -2));
        var o_height = parseInt($("img").css("height").slice(0, -2));
        var ratio = o_height / o_width;
        
        $("img").css("width", "10%");
        var width = Number($("img").css("width").slice(0, -2));
        var height = Math.floor(width * ratio);
        $("img").css("height", height);
      });
    </script>
  </head>

  <body>
<?
  foreach($images as $filename) {
?>
    <img src="<?=$filename?>" />
<?
  }
?>
  </body>
</html>
