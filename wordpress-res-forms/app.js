jQuery(document).ready(function() {
	//requires jquery (obviously) and jquery ui-datepicker (or another)

    var now = new Date();
    var date = jQuery('.form-date');
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear() + "-" + (month) + "-" + (day);

    date.val(today);

    var form = jQuery('form.res-form');

    form.on('submit', function (e) {
        var currentForm = jQuery(this);
        var newVal = currentForm.find('.form-date').val().split('-'),
        
		//careful here as browsers will behave differently in how they format the date. Need datepicker for Firefox and ie

            dateParts = {
                year: parseInt(newVal[0], 10),
                month: parseInt(newVal[1], 10),
                day: parseInt(newVal[2], 10)
            };

        currentForm.find('.anchor').append(jQuery.map(dateParts, function (index, key) {
            /* console.log(['date', form.index(currentForm), key].join('_')); */
            /* console.log(dateParts[key]); */
            
            return jQuery('<input>', {
                type: 'hidden',
                name: ['date', key].join('_'),
                id: ['date', form.index(currentForm), key].join('_'),
                value: dateParts[key]
            });
        }));
        
    });

    
    jQuery('#openQuickres').find('a').on('click',function(event){
       event.preventDefault();
       var y = jQuery(window).scrollTop();  //current y position on the page
	   jQuery(window).scrollTop(y+250);
       console.log("clicked");

	       jQuery('#quickres-block').toggleClass('hidden');
       });
       
   
	

	(function() {  
      var elem = document.createElement('input');  
      elem.setAttribute('type', 'date');  
  
      if ( elem.type === 'text' ) {  
         jQuery('.datepicker').datepicker({
    
	    dateFormat: 'yy-mm-dd',
	    firstDay: 1,
	    minDate: 0,
	  
	  //minDate disables previous dates and adds a class for styling them (ie. greying out)
	  
	  
		});
      }  
   })(); 
	
}); 


