<!DOCTYPE html>
<html>
    <head>
        <?php include "header.php" ?>
        <link rel="stylesheet" type="text/css" href="css/bootstrap-editable.css" />
        <script type="text/javascript" src="js/bootstrap-editable.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
    </head>
    <body>
        <div class="container">
            <?php include "menu.php" ?>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div id="connection" style="display: none;">
                        <center>
                            <img src="img/connection.jpg" class="thumbnail" width="80%" height="80%"/>
                            <br/><br/>
                            <div class="btn-group">
                                <button class="btn btn-warning">Warning</button>
                                <button class="btn btn-default">Do not connect 5 volt power to serial connection (3.3 volt only)</button>
                            </div>
                        </center>
                    </div>
                    <table class="table table-bordered table-striped table-hover" style="display:none;" id="parameters">
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </body>
</html>