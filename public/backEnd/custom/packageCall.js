 function show(package) {
        if (package == "Tour") {
            $('.call').load('tour/' + package);
        } else if (package == "HajjAndOmra") {
            
            $('.call').load('hajjOmra/' + package);

        } else if (package == "AirTicketing") {

            $('.call').load('airTicketing/' + package);

        } else if (package == "HotelBooking") {

            $('.call').load('HotelBooking/' + package);

        } else if (package == "VisaProcessing") {

            $('.call').load('visaProcessing/' + package);

        }

        //$('.credit').load('get_course_credit.php?c_code='+course_code);
    }
    function dist(id) {

        $('.di').load('getDistrict/' + id);

    }