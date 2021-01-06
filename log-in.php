<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>

   <div class='container'>

      <h1>
         Log-In Navinka Hotel System
      </h1>

      <form name="login" class='form'>

         <br><br>
         <label for="">User Name</label>
         <input class='form form-control' type="text" name="userid">

         <label for="">Password</label>
         <input class='form form-control' type="password" name="pswrd"><br><br>

         <input type="button" class='btn btn-primary' onclick="check(this.form)" value="Login">
         <input type="reset" class='btn btn-warning' value="Cancel" />
      </form>

   </div>


   <script>
      function check(form) {

         if (form.userid.value == "admin" && form.pswrd.value == "admin") {
            window.open('backend.php');
         } else {
            alert("Error Password or Username");
         }
      }
   </script>

</body>

</html>