<?php  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body style="background-color: #d3d3d3; color: white">
  <h1 style="color: yellow; text-align: center;">Welcome to the Store</h1>
<div class="login-page">
  <div class="form" style="text-align: center; margin-left: 600px;">
    <form style="padding: 20px; display: block; text-align: center;" class="login-form" method="POST">
      <input style="margin-top: 20px; display: block; width: 200px; height: 50px; border-radius: 20px; border-style: none;" type="text" id="title" placeholder="Title of the book"/>
      <input style="margin-top: 20px; display: block; width: 200px; height: 50px; border-radius: 20px; border-style: none;" type="text" id="author" placeholder="Author of the book"/>
      <input style="margin-top: 20px; display: block; width: 200px; height: 50px; border-radius: 20px; border-style: none;" type="number" id="quantity" placeholder="Quantity"/>
      <button style="background-color: black; color: white; margin-top: 20px; display: block; width: 200px; height: 50px; border-radius: 20px; border-style: none;" name="submit" onclick="post(event)">Add to store</button>
    </form>
    </div>
</div>

<table style="text-align: center;" id="table">
  <tr>
    <th>TITLE</th>
    <th>Author</th>
    <th>Quantity</th>
  </tr>
  <tr>
    <td id="titleget"></td>
    <td id="authorget"></td>
    <td id="quantityget"></td>
  </tr>
</table>
<script type="text/javascript">

const table = document.getElementById("table");
function post(eveform) {
eveform.preventDefault();
var titleget = document.getElementById("title").value;
var authorget = document.getElementById("author").value;
var quantityget = document.getElementById("quantity").value;

       let title  =  document.createElement("td"); title.innerHTML = titleget;
       let author  =  document.createElement("td"); author.innerHTML = authorget;
       let quantity  =  document.createElement("td"); quantity.innerHTML = quantityget;

       let row = document.createElement("tr");
       row.appendChild(title);
       row.appendChild(author);
       row.appendChild(quantity);

       table.appendChild(row)

}
</script>
</body>
</html>