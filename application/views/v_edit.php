<html>
<head>
  <title>Edit User Data</title>
</head>

<body>
  <a href="tekinfo/admin">Home</a>
  <br/><br/>

  <?php foreach($crud_db as $c){ ?>
    <form action="<?php echo base_url(). 'admin/update'; ?>" method="post">
      <table border="0">
        <tr>
        <input type="hidden" name="id" value="<?php echo $c->id ?>">  
        </tr>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value=<?php echo $c->name;?>></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" name="phone" value=<?php echo $c->phone;?>></td>
        </tr>
        <tr>
          <td>Time</td>
          <td><input type="text" name="time" value=<?php echo $c->time;?>></td>
        </tr>
        <tr>
          <td>Number</td>
          <td><input type="text" name="number" value=<?php echo $c->number;?>></td>
        </tr>
         <tr>
          <td>Orderan</td>
          <td><input type="text" name="orderan" value=<?php echo $c->orderan;?>></td>
        </tr>
         <tr>
          <td>Event</td>
          <td><input type="text" name="event" value=<?php echo $c->event;?>></td>
        </tr>
        <tr>
          <td>Message</td>
          <td><input type="text" name="message" value=<?php echo $c->message;?>></td>
        </tr>
        <tr>
          <td><input type="submit" name="update" value="Update"></td>
        </tr>
      </table>
    <?php } ?>
    </form>
  </body>
  </html>
