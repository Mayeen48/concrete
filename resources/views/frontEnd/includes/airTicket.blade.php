<section class="aT" id="service" style="height: 500px;">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('public/frontEnd/at/')}}/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{asset('public/frontEnd/at/')}}/vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('public/frontEnd/at/')}}/css/style.css">

    <div class="main">


        <div class="container">
            <h1>Air Line Reservation</h1>
            <div class="alert" id="ticketMessage" style="display: none"></div>
            {{ Form::open(['method' => 'post','id'=>'booking-form','class'=>'booking-form']) }}
           
                <div class="form-group">
                    <div class="form-destination">
                        <label for="departure">FROM</label>
                        <input type="text" id="departure" name="departure" placeholder="Departure Country" />
                    </div>
                    <div class="form-destination">
                        <label for="destination">TO</label>
                        <input type="text" id="destination" name="destination" placeholder="Destination Country" />
                    </div>
                    <div class="form-date-from form-icon">
                        <label for="date_from">Departure</label>
                        <input type="text" name="depDate" id="date_from" class="date_from" placeholder="Pick a date" autocomplete="off" />
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>
                    <div class="form-date-to form-icon">
                        <label for="date_to">Return</label>
                        <input type="text" name="desDate" id="date_to" class="date_to" placeholder="Pick a date" autocomplete="off" />
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>
                </div>
                <div class="form-group">
                   
                    <div class="form-destination">
                        <label for="trip">Trip</label>
                        <select class="input" id="trip" name="trip">
                            <option value="">---Please Select---</option>
                            <option value="OneWay">One Way</option>
                            <option value="TwoWay">Two Way</option>
                        </select>
                    </div>
                    <div class="form-destination">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Name" />
                    </div>
                    <div class="form-destination">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email" />
                    </div>
                    <div class="form-destination">
                        <label for="phone">Phone</label>
                        <input type="number" id="phone" name="phone" placeholder="Enter Phone Number" autocomplete="off" />
                    </div>
                    
                </div>
                <div class="form-group">
                     <div class="form-quantity">
                        <label for="quantity">Person</label>
                        <span class="modify-qty plus" onClick="Tang()"><i class="zmdi zmdi-chevron-up"></i></span>
                        <input type="number" name="person" id="quantity" value="0" min="0" class="nput-text qty text">
                        <span class="modify-qty minus" onClick="Giam()"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                    <div class="form-submit">
                        <input type="submit" id="submit" class="submit" value="Book now" />
                    </div>
                </div>
            {{ Form::close() }}
            
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('public/frontEnd/at/')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('public/frontEnd/at/')}}/vendor/jquery-ui/jquery-ui.min.js"></script>
    
    <script src="{{asset('public/frontEnd/at/')}}/js/main.js"></script>


</section>
