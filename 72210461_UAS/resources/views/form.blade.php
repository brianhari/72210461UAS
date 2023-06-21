<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form action="/form/proses" method="POST">
        @csrf
        <div class="form-check w-25">
            <input class="form-check-input" type="radio" name="sisteminformasi" value="sisteminformasi" checked>
            <label class="form-check-label" for="exampleRadios1">
              Sistem Informasi
            </label>
          </div>
          <div class="form-check w-25">
            <input class="form-check-input" type="radio" name="teknikinformatika" value="teknik informatika" >
            <label class="form-check-label" for="exampleRadios2">
              Teknik Informatika
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="kedokteran" value="kedokteran">
            <label class="form-check-label" for="exampleRadios3">
              Kedokteran
            </label>
          </div>
          <div class="form-check w-25">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Pria
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">
              Wanita
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">
              Lainnya
            </label>
          </div>
        <button type="submit" class="btn btn-light mb-4">SEND</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
