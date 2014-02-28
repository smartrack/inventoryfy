$(function() {

    $('#side-menu').metisMenu();
	
		
	Morris.Area({
		element: 'morris-area-chart',
		data: [{
		period: '2014-02-07',
		sales: 2666,
		},{
		period: '2014-02-06',
		sales: 1666,
		},{
		period: '2014-02-05',
		sales: 2123,
		},{
		period: '2014-02-04',
		sales: 1783,
		}],
		xkey: 'period',
		ykeys: ['sales'],
		labels: ['sales'],
		pointSize: 5,
		hideHover: 'auto',
		resize: true
		}); 

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
    $(window).bind("load resize", function() {
        console.log($(this).width())
        if ($(this).width() < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})
