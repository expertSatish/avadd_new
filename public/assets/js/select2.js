// Class definition
var KTSelect2 = function() {
    // Private functions
    var demos = function() {

            // multi select
            $('#group_type').select2({
                placeholder: 'Select User Type',
            });
        }
        // Public functions
    return {
        init: function() {
            demos();
            modalDemos();
        }
    };
}();

var modalDemos = function() {
        $('#kt_select2_modal').on('shown.bs.modal', function() {
            // multi select
            $('#kt_select2_3_modal').select2({
                placeholder: "Select a state",
            });
        });
    }
    // Initialization
jQuery(document).ready(function() {
    KTSelect2.init();
});