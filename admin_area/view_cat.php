<?php include("includes/functions.php") ?>

  <table width="100%" align="center" bgcolor="white" cellpadding="6" cellspacing="0">
    <tr style="background: #3989bf;color:white">
      <td  align='center'><b>Category Id</b></td>
      <td   align='center'><b>Category Title</b></td>
      <td  align='center'><b>Edit</b></td>
      <td  align='center'><b>Delete</b></td>
    </tr>
    <?php
    global $con;
    $get_cats="select * from categories";
    $get_cats=mysqli_query($con,$get_cats);
    while($row=mysqli_fetch_array($get_cats)){
      $id=$row['cat_id'];
      $title=$row['cat_title'];
      echo "<tr>
      <td colspan='1' align='center'>$id</td>
      <td  align='center'>$title</td>
      <td><a href='index.php?edit_cat=$id'><button>Edit</button></a></td>
      <td><a href='index.php?del_cat=$id'><button>Delete</button></a></td>
      </tr>";
    }
     ?>
  </table>

