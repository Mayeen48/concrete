

<section class="service" id="service">
    <div class="container">
        <h2 class="text-center">Our services</h2>
        <p class="text-center">Concrete Tours & Travels.</p>
        <div class="row">
            <div class="col-lg-3 col-md-3 serv-w3ls">
                <h4>Tour Package</h4>
                <p class="serv-p">
                    <button onclick="showPack('Tour')"> <img src="{{asset('public/frontEnd/images/packages/tour.jpg')}}"></button>
                </p>
            </div>
            <div class="col-lg-3 col-md-3 serv-w3ls">
                <h4>Hajj and Omrah Package</h4>
                <p class="serv-p">
                    <button onclick="showPack('HajjAndOmra')"><img src="{{asset('public/frontEnd/images/packages/Hajj-and-umrah.jpg')}}"></button>
                </p>
            </div>
            <div class="col-lg-3 col-md-3 serv-w3ls">
                <h4>Air Ticketing</h4>
                <p class="serv-p">
                    <button onclick="showAirTicket()"><img src="{{asset('public/frontEnd/images/packages/Air Ticketing.jpg')}}"></button>
                </p>
            </div>
            <div class="col-lg-3 col-md-3 serv-w3ls">
                <h4>Hotel Booking</h4>
                <p class="serv-p">
                    <button onclick="showPack('HotelBooking')"><img src="{{asset('public/frontEnd/images/packages/Hotel Booking.jpg')}}"></button>
                </p>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-3 col-md-3 serv-w3ls">
                <h4>Visa Processing</h4>
                <p class="serv-p">
                    <button onclick="showPack('VisaProcessing')"><img src="{{asset('public/frontEnd/images/packages/Visa.jpg')}}"></button>
                </p>
            </div>
        </div>

        <br/>
        <hr/>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 serv-w3ls">
                <div class="pack">
                    All Packages are show here........
                </div>
            </div>
        </div>

    </div>



</section>