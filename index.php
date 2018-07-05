<?php include 'database.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    body{background-color: #000}
    .top{margin-top: 50px}
    </style>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-8 col-md-offset-2 top">
               <form class="form well" method="post" action="data.php">
                   <div class="form-group">
                      <label for="name">Name</label>
                       <input name="name" class="form-control" id="name" type="text" placeholder="Enter Your Name..">
                   </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                       <input name="email" class="form-control" id="email" type="email" placeholder="Enter Your Email..">
                   </div>
                    <div class="form-group">
                      <label for="phone">Phone no</label>
                       <input name="phone" class="form-control" id="phone" type="text" placeholder="Enter Your Phone no..">
                   </div>
                    <div class="form-group">
                      <select class="form-control" name="country" id="">
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="India">India</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Brazil 7up">Brazil 7up</option>
                          <option value="Others">Others</option>
                      </select>
                   </div>
                   <div class="form-group">
                      <label for="message">Feedback</label>
                       <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                   </div>
                   <div class="form-group">
                      <input type="submit" class="btn btn-info form-control">
                   </div>
               </form>
           </div>
       </div>
   </div>
    
</body>
</html>