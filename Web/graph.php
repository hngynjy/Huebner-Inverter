<!DOCTYPE html>
<html>
    <head>
        <?php include "header.php" ?>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css" />
        <script src="js/bootstrap-slider.js"></script>
        <script src="js/potentiometer.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/chart.js"></script>
        <script src="js/chartjs-plugin-datalabels.js"></script>
		<script src="js/jscolor.js"></script>
        <script src="js/graph.js"></script>
    </head>
    <body>
        <div class="container">
            <?php include "menu.php" ?>
            <br/>
            <div class="row">
                <div class="col" align="center">
                    <table class="table table-active bg-light" id="render">
                        <tr>
                            <td>
								<center>
									<div id="buildGraphMenu"></div>
									<div id="potentiometer" style="display:none">
										<input class="knob" data-displayinput="true" data-min="0" data-max="100" data-fgcolor="#222222" data-bgcolor="#FFFFFF" value="0">
									</div>
									<br/>
									<div id="buildGraphButtons"></div>
								</center>
							</td>
						</tr>
						<tr>
                            <td>
								<div class="chartWrapper bg-light">
									<div class="chartAreaWrapper">
										<div class="chartAreaWrapper2">
											<canvas id="canvas"></canvas>
										</div>
									</div>
								</div>
                            </td>
                        </tr>
						<tr>
                            <td>
								<div class="mx-auto" id="buildGraphSlider"></div>
							</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br/>
		<a class="graphPoints" data-fancybox data-src="#graphPoints" href="javascript:;"></a>
        <div class="hidden" id="graphPoints" style="width:60%;border-radius:5px">
            <center>
                <div id="buildPointsMenu"></div>
                <br/>
                <button class="browse btn btn-primary" type="button" onClick="$.fancybox.close();"><i class="glyphicon glyphicon-search"></i> OK</button>
            </center>
        </div>
    </body>
</html>