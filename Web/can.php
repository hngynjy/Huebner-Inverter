<?php
    if(isset($_POST["data"])){

        $data = $_POST["data"];
        $file = fopen(realpath(__DIR__ . "/js/can.json", "w"));
        fwrite($file, $data);
        fclose($file);

    }else if(isset($_GET["clear"])){

        unlink(realpath(__DIR__ . "/js/can.json"));
        
    }else{
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "header.php" ?>
        <script src="js/can.js"></script>
    </head>
    <body>
        <div class="container">
            <?php include "menu.php" ?>
            <br>
            <div class="row">
                <div class="col">
                    <div class="container bg-light">
                        <div class="row"><hr></div>
                        <div class="row">
                            <div class="col col-md-4">
                                <p>USB-CAN Interface:</p>
                                <p>Inverter CAN Speed:</p>
								<p>Inverter CAN Period:</p>
                            </div>
							<div class="col col-md-4 text-center">
								<select name="interface" class="form-control" onchange="setCANImage()" id="can-interface"></select>
								<select name="speed" class="form-control" onchange="setCANSpeed()" id="can-speed">
									<option value="0">250kbps</option>
									<option value="1">500kbps</option>
									<option value="2">800kbps</option>
									<option value="3">1000kbps</option>
								</select>
								<select name="period" class="form-control" onchange="setCANPeriod()" id="can-period">
									<option value="0">100ms</option>
									<option value="1">10ms</option>
								</select>
							</div>
							<div class="col col-md-4 text-center" id="can-image">
								<img src="" class="rounded" />
                            </div>
                        </div>
                        <div class="row"><hr></div>
                        <div class="row">
                            <div class="col" id="open-cantact">
                                <button type="button" class="btn btn-primary" onClick="eval(checkSoftware('cantact'))"><i class="glyphicon glyphicon-th-list"></i> Open CANtact App</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger" onClick="setCANDefaults()"><i class="glyphicon glyphicon-erase"></i> Reset CAN</button>
                            </div>
                            <div class="col">
                               <button type="button" class="btn btn-success" onClick="saveCANMapping()"><i class="glyphicon glyphicon-erase"></i> Save CAN</button>
                            </div>
                        </div>
                        <div class="row"><hr></div>
                    </div>
					<center>
						<div class="loader"></div>
					</center>
                    <table class="table table-active bg-light table-bordered table-striped table-hover" style="display:none;" id="parameters"></table>
                </div>
            </div>
        </div>
    </body>
</html>
<?php } ?>