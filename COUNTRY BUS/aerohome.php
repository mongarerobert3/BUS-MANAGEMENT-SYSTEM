<?php
include 'assets/db_connect.php';
?>
<style>
    #portfolio .img-fluid{
        width: calc(100%);
        height: 30vh;
        z-index: -1;
        position: relative;
        padding: 1em;
    }
</style>
<header class="masthead">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4 page-title">
                <h3 class="text-white">Welcome to Country Bus</h3>
                <hr class="divider my-4" />
                <div class="col-md-12 mb-2 text-left">
                    <div class="card">
                        <div class="card-body">
                            <form id="manage-filter" action="assets/index.php?page=flights" method="POST">
                                <div class="row form-group">
                                    <div class="col-sm-3">
                                        <label for="" class="control-label">From</label>
                                        <select name="departure_airport_id" id="departure_location" class="custom-select browser-default select2">
                                            <option value=""></option>
                                            <?php
                                            $airport = $conn->query("SELECT * FROM airport_list order by airport asc");
                                            while($row = $airport->fetch_assoc()):
                                                ?>
                                                <option value="<?php echo $row['id'] ?>" <?php echo isset($departure_airport_id) && $departure_airport_id == $row['id'] ? "selected" : '' ?>><?php echo $row['location'].", ".$row['airport'] ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="" class="control-label">To</label>
                                        <select name="arrival_airport_id" id="arrival_airport_id" class="custom-select browser-default select2">

                                            <option value=""></option>

                                            <?php
                                            $airport = $conn->query("SELECT * FROM airport_list order by airport asc");
                                            while($row = $airport->fetch_assoc()):
                                                ?>
                                                <option value="<?php echo $row['id'] ?>" <?php echo isset($arrival_airport_id) && $arrival_airport_id == $row['id'] ? "selected" : '' ?>><?php echo $row['location'].", ".$row['airport'] ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="" class="control-label">Departure Date</label>
                                        <input type="date" class="form-control input-sm datetimepicker2" name="date" autocomplete="off">
                                    </div>
                                    <div class="col-sm-3" id="rdate" style="display: none">
                                        <label for="" class="control-label">Return Date</label>
                                        <input type="date" class="form-control input-sm datetimepicker2" name="date_return" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-2 text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="trip" id="onewway" value="1" checked>
                                            <label class="form-check-label" for="oneway">
                                                One-way
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="trip" id="rtrip" value="2">
                                            <label class="form-check-label" for="rtrip">
                                                Round Trip
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 offset-sm-5">
                                        <button class="btn btn-block btn-sm btn-primary" type="submit"><i class="fa-solid fa-bus"></i> Find Bus</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<section class="page-section" id="menu">
<br><br>


