<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     </head>
     <body>
 <div>  
    <h1>form pen</h1>
    <form action="halaman.php" method="GET">
        <div class="form-group row">
            <label for="mesjid" class="col-4 col-form-label">Nama mesjid</label> 
        <div class="col-8">
            <input id="mesjid" name="mesjid" type="text" class="form-control">
        </div>
        </div>
        <div class="form-group row">
            <label for="kecamatan" class="col-4 col-form-label">kecamatan</label> 
        <div class="col-8">
             <input id="kecamatan" name="kecamatan" type="text" class="form-control">
        </div>
        </div>
        <div class="form-group row">
             <label for="text" class="col-4 col-form-label">deskripai</label> 
        <div class="col-8">
              <textarea id="text" name="text" cols="40" rows="5" class="form-control"></textarea>
        </div>
        </div> 
        <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
</div>
     </body>
     </html>