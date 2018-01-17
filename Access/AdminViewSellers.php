<?php
  $color = "#333333";
  if(strcmp($row['userStatus'], 'inactive') != 0){
    $color=(strcmp($row['userStatus'], 'active') == 0)?"#9ACD32":"#FF0000";
  }
?>
<tr>
  <th scope="row"><?php echo $count;?></th>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['userId'];?>"><?php echo $row['name'];?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['userId'];?>"><?php echo $row['description'];?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['userId'];?>"><?php echo $row['email'];?></td>
  <td data-toggle="modal" data-target="#mrowModal<?php echo $row['userId'];?>" style = "color:<?php echo $color;?>"><?php echo $row['userStatus'];?></td>
  <td>
    <button type="button" data-toggle="modal" data-target="#banModal<?php echo $row['userId'];?>" class="btn btn-primary">Ban</button>
    <!-- Modal-->
    <div id="banModal<?php echo $row['userId'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Confirm Action</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to ban this manufacturer?</p>
          </div>
          <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
          <form  method = "post" action = "Controllers/DeactivateUser.php">
          <input type = "hidden" name ="userId" value = "<?php echo $row['userId'];?>" />
          <input type = "submit" class="btn btn-primary" value = "Yes"/>
          </div>
        </div>
      </div>
    </div>
  </td>

  <!-- Modal Contents for Row -->
  <div class="modal fade" id="mrowModal<?php echo $row['userId'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content " style="width: 600px;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-5">
              <img src="https://cdn.tutsplus.com/net/uploads/legacy/958_placeholders/placehold.gif">
            </div>
            <div class="col-7">
             <div class="row" style="padding-left: 20px;"><h5>User ID: <h5  style="font-weight: normal; padding-left: 5px;">John</h5>  </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Seller ID: <h5 style="font-weight: normal; padding-left: 5px;">Smithers</h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Company Name: <h5 style="font-weight: normal; padding-left: 5px;">Smith</h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>User Type: <h5 style="font-weight: normal; padding-left: 5px;">Male</h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>User Status:<h5 style="font-weight: normal; padding-left: 5px;">+63 123 456 7890</h5> </h5></div>
             <div class="row" style="padding-left: 20px;"><h5>E-Mail Address: <h5 style="font-weight: normal; margin-left: 5px;">name@user.com</h5></h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Phone Number: <h5 style="font-weight: normal; margin-left: 5px;">123123</h5></h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Join Date: <h5 style="font-weight: normal; margin-left: 5px;">123123</h5></h5></div>
             <div class="row" style="padding-left: 20px;"><h5>Added By: <h5 style="font-weight: normal; margin-left: 5px;">123123</h5></h5></div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</tr>