
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
<div class="container">
    <div class="col-md-10">
        <h3>Orders</h3>
            @foreach ($orders as $order)
                <ul class="list-group">
                    <li class="list-group-item">
                        {{ $order->email}} - {{ $order->product }}
                    </li>
                </ul>
            @endforeach
    </div>
</div>
    </div>
  </body>
</html>