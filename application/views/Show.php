<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-striped text-center" >
  <thead>
    <tr>
      <th scope="row"rowspan="2" >ขบวน</th>
      <th scope="col"colspan="2">ต้นทาง</th>
      <th scope="col"colspan="2">ห้วยราช</th>
      <th scope="col"colspan="2">ปลายทาง</th>
      <th scope="row"rowspan="2">หมายเหตุ</th>
    </tr>
<tr>
<th scope="col">สถานี</th>
<th scope="col">เวลาออก</th>
<th scope="col">ถึง</th>
<th scope="col">ออก</th>
<th scope="col">สถานี</th>
<th scope="col">ถึงเวลา</th>
</tr>
</thead>
<?php foreach ($query as $row) {?>


<tbody>
    <tr>
        <td><?php echo $row['P_name']?></td>
        <td><?php echo $row['O_StationName']?></td>
        <td><?php echo $row['O_OutTime']?></td>
        <td><?php echo $row['H_To']?></td>
        <td><?php echo $row['H_Out']?></td>
        <td><?php echo $row['T_Namestation']?></td>
        <td><?php echo $row['T_To']?></td>
        <td><?php echo $row['P_NameStation']?></td>
    </tr>
</tbody>
<?php } ?>
</table>
</body>
</html>