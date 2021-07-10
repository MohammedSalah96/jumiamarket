var Customers = function() {
var CustomersGrid;

    var init = function() {
        $.extend(config, newConfig);
        handleRecords();
        handleFilter();
    };

    var handleFilter = function(){
         $("#state, #country").change(function(){
            $('#customers-grid').DataTable().destroy();
            $('#customers-grid tbody').empty();
            handleRecords();
        });
    }

    var handleRecords = function() {
        CustomersGrid = $('#customers-grid').DataTable({
            "processing": true,
            "serverSide": true,
            "responsive":true,
            "searching": false,
            "ajax": {
                "url": config.url + "/customers/data",
                "type": "GET",
                data: { state: $('#state').val(), country: $('#country').val() },
            },
            "columns": [
                {
                    "data": "country",
                    orderable:false
                }, 
                {
                    "data": "state",
                    orderable:false
                },
                {
                    "data": "country_code",
                    orderable: false,
                },
                {
                    "data": "phone"
                }, 
            ],
            'columnDefs': [
                { 
                    className: 'text-center', targets: [0,1,2,3] 
                }
            ]
        });
        
    }
    return {
        init: function() {
            init();
        }
    };

}();

jQuery(document).ready(function() {
    Customers.init();
});