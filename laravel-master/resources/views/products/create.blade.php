
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Product</h2><br  />
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
      <form method="post" action="{{url('product')}}">

	{{csrf_field()}}

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="text" class="form-control" name="price">
            
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="category">category:</label>

		<select class="form-control" name="category">

  		 <?php if ($items->count()){

      		 	 foreach($items as $item){
				?>
          		  <option value="{{ $item->id }}" {{ 1 == $item->id ? 'selected=selected' : '' }}>{{ $item->name }}</option>  
		<?php
			}
		}
		?>  

    		
		</select>

              
            </div>        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="order">order:</label>
              <input type="text" class="form-control" name="order">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Create Product</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>