$(document).ready(function()
{
	$( "#departure-date" ).datepicker({minDate:0, maxDate:4});
	
	//alert('sdfsd');
	function calculate_by_location()
	{
				from = $('#from').val();
				to = $('#to').val();
				fare = 0;
					//alert('From: '+from+' To: '+to);
				if((from == 'nairobi' && to == 'isiolo') || (from == 'isiolo' && to == 'nairobi'))
				{
					fare = 1000;
				}else if((from == 'nairobi' && to == 'marsabit') || (from == 'marsabit' && to == 'nairobi'))
				{
					fare = 1500;
				}else if ((from == 'nairobi' && to == 'sololo') || (from == 'sololo' && to == 'nairobi')) {
					fare = 2000;
				}else if ((from == 'nairobi' && to == 'moyale') || (from == 'moyale' && to == 'nairobi')) {

					fare=2500;
				}else if ((from == 'isiolo' && to == 'marsabit') || (from == 'marsabit' && to == 'isiolo')) {

					fare = 1000;
				}else if ((from == 'isiolo' && to == 'sololo') || (from == 'sololo' && to == 'isiolo')) {

					fare = 1500;
				}else if ((from == 'isiolo' && to == 'moyale') || (from == 'moyale' && to == 'isiolo')){

					fare = 2000;
				}else if ((from == 'marsabit' && to == 'sololo') || (from == 'sololo' && to == 'marsabit')){

					fare = 500;
				}else if ((from == 'marsabit' && to == 'moyale') || (from == 'moyale' && to == 'marsabit')) {

					fare = 1000;
				}else if ((from == 'sololo' && to == 'moyale') || (from == 'moyale' && to == 'sololo')) {

					fare = 500;
				}
				
				else{

					alert("Kindly differentiate your source and destination");
				}
				return fare;
	}
	calculate_by_type();
	function calculate_by_type()
	{
		type = $('input[name="trip-type"]:checked').val();
		return type;

	}
	/*function calculate_by_seats()
	{
			numberOfSeats = $('#numberOfSeats').val();
			return numberOfSeats;
	}*/

	$('#from,#to,input[name="trip-type"]').change(function()
	{

		fare = calculate_by_location() * calculate_by_type();
		$('#fare-summary .value').text(fare);
		$('#fare-hidden').val(fare);
	});

$( "#accordion" ).accordion();

	$('#numberOfSeats').change(function()
	{
		fare = $(this).attr('fare');
		seats = $(this).val();
		
		$('.fare').text(seats * fare);
	});
});






