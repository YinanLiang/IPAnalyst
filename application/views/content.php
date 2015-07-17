<?php
/**
 * Created by PhpStorm.
 * User: Lynn
 * Date: 7/17/15
 * Time: 5:33 AM
 */
?>

<div class="row">
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">City</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>city</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cites as $row):?>
                                <tr>
                                    <td><?php echo $row[0];?></td>
                                    <td><?php echo $row[1];?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <!-- close .col-md-4 -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">File Uploads</h3>
            </div>
            <div class="panel-body">

                <form role="form" action="<?php echo base_url("index.php/site/updateDatabase");?>">
                    <div id="database">

                        <div class="form-group">
                            <label>Database</label>
                            <input type="file">
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>

                    </div>
                </form>
                <!-- database -->
                <br>

                <form role="form" action="<?php echo base_url("index.php/site/uploadLog");?>">
                    <div id="log">
                        <div class="form-group">
                            <label>Log</label>
                            <input type="file">
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
                <br> <br>
                <form role="form" action="<?php echo base_url("index.php/site/showData");?>">
                    <button type="submit" class="btn btn-default">Refresh</button>
                </form>
            </div>
        </div>
    </div>


    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">ISP</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ISP</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($cites as $row):?>
                                <tr>
                                    <td><?php echo $row[0];?></td>
                                    <td><?php echo $row[1];?></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <!-- close .col-md-4 -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- close .row -->



