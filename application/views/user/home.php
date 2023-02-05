<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort booking form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/draw.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- <img src="<?php echo base_url('css/resor.jpg'); ?>" width="720" height="246" alt=""/> -->
    
</head>
<body>
    <div class="container">
    <?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
<?php endif; ?>
        <form class="form-group"  action="<?= site_url('User/add_booking')?>" method="post">
            <div id="form">
                <h1 class="text-white text-center">Book Now</h1>

                <div id="first-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" name="firstname" placeholder="First name">
                    </div>

                    <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" id="input-group" name="phone_number" placeholder="Phone number">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" id="input-group" name="departure_date" placeholder="Departure Date">
                    </div>

                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" type="text" name="guest" style="background-color: black;">
                            <option>No.of guests</option>
                            <option>1-5</option>
                            <option>6-10</option>
                            <option>11-20</option>
                        </select>
                    </div>

                </div>

                <div id="second-group">

                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" name="lastname" placeholder="Last name">
                    </div>

                    <div id="content">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" id="input-group" name="email" placeholder="Email">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" id="input-group" name="arrival_date" placeholder="Arrival Date">
                    </div>

                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" type="text" name="room_type" style="background-color: black;">
                            <option>Room Type</option>
                            <option>Single Bed</option>
                            <option>Double Bed</option>
                            <option>Deluxe</option>
                        </select>
                    </div>
            
                </div>

                <button type="submit" value="Submit" id="submit-btn" method="post">Book Now</button>

            </div>
        </form>
    </div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script>
        
		$(document).ready(function(){
            <?php if($this->session->flashdata() == 'success'):?>
			swal({
				title: 'Thank You!',
				text: 'Hello',
				icon: 'success',
                timer:2000,
				button:false,
				});
            <?php endif;?>
		});
    </script>
</html>