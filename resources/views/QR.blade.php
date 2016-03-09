<!doctype html>
<html>
  <head>
    <title>Generar QR</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>
  <body>
    <div>
      <h1>Generar QR</h1>
   {{Form::open(array('url'=>'/qrcode','method' => 'GET'))}}
        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="phone_num" placeholder="Phone Number" />
        <input type="submit" name="submit" value="Send" />
     {{ Form::close() }}
    </div>
  </body>
</html>
