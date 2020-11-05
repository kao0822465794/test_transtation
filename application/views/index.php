<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">หน้าแรก</a>
  <a class="navbar-brand" href="<?php echo site_url('Welcome/select')?>">หน้าแรก</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    
  </button>

</nav>
  <form action="<?php echo site_url('Welcome/add')?>"method="post">
			<div class="container" align="center">
        <h1><b>ตารางเวลาของรถไฟ</B></h1>
				<br><br>

				<div class="container" align="left">
					<div class="card text-white bg-info mb-3" style="width: 65rem;">
          <div class="card-body">
          
            <p></p>
            
              <div class="container" align="center">
						    <h2><b>กรอกข้อมูล<b></h2>
                <br>
              </div>

						<div class="col">
							<h5>ขบวนรถโดยสาร</h5>
							<input type="text" id="train" name="P_Name" class="form-control" placeholder="">
						</div>
            <br>
            <div class="container" align="center">
            <h4>ต้นทาง</h4>
          </div>    
						<div class="col">
							<label>สถานี</label>
							<input type="text" id="O_StationName" name="O_StationName" class="form-control" placeholder="">
						</div>
						<div class="col">
							<label>เวลาออก</label>
							<input type="text" id="O_OutTime" name="O_OutTime" class="form-control" placeholder="">
						</div>
						<br>
						<div class="container" align="center">
            <h4>ห้วยราช</h4>
            </div>
						<div class="col">
							<label>ถึง</label>
							<input type="text" id="To_huayrat" name="H_To" class="form-control" placeholder="">
						</div>
						<div class="col">
							<label>ออก</label>
							<input type="text" id="Out_huayrat" name="H_Out" class="form-control" placeholder="">
						</div>
						<br>
					<div class="container" align="center">
            <h4>ปลายทาง</h4>
            </div>
						<div class="col">
							<label>สถานี</label>
							<input type="text" id="Terminal" name="T_Namestation" class="form-control" placeholder="">
						</div>
						<div class="col">
							<label>ถึงเวลา</label>
							<input type="text" id="To_terminal" name="T_To" class="form-control" placeholder="">
						</div>
						<div class="col">
							<br>
							<h6><b>หมายเหตุ<b></h6>
							<input type="text" id="note" name="P_NameStation" class="form-control" placeholder="">
						</div>
            <br>
            <div class="container" align="center">
            <button type="submit" class="btn btn-primary">ยืนยันกรอกข้อมูล</button>
            </div>
          </div>
          </div>
					


				</div>
      </div>
      </form>
		</div>

	</div>
</div>
</div>
</body>
</html>