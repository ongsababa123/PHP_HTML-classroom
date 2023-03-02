<IDOCTYPE html>
  <html lang="en-TH" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title> workshop 7_2 Hello world</title>
  </head>

  <body>
    <?php
    $greetings = new HelloWorld; // Create the object
    echo $greetings->say_hello_html();
    ?>

    <?php
    class HelloWorld
    {
      public $world = 'World';
      function say_hello_html()
      {
        return "<h2>Hello, " . $this->world . "!</h2>";
      }
    }
    ?>
  </body>

  </html>