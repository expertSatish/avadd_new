// Class definition

var KTBootstrapDatepicker = function() {

    var arrows;
    if (KTUtil.isRTL()) {
        arrows = {
            leftArrow: '<i class="la la-angle-right"></i>',
            rightArrow: '<i class="la la-angle-left"></i>'
        }
    } else {
        arrows = {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }
    }

    // Private functions
    var demos = function() {
        // orientation 
        $('#kt_datepicker_4_1').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "top left",
            todayHighlight: true,
            templates: arrows,
            startDate: new Date()
        });

        $('#kt_datepicker_4_2').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "top left",
            todayHighlight: true,
            templates: arrows,
            startDate: new Date()
        });

        $('#kt_datepicker_4_3').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });

        $('#kt_datepicker_4_4').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });

        $('#kt_datepicker_4_5').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        }).on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#kt_datepicker_4_6').datepicker('setStartDate', startDate);

        });


        $('#kt_datepicker_4_6').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });

        $('#kt_datepicker_4_7').datepicker({
                rtl: KTUtil.isRTL(),
                orientation: "bottom left",
                todayHighlight: true,
                templates: arrows,
                endDate: new Date()
            })
            .on('changeDate', function(selected) {
                var startDate = new Date(selected.date.valueOf());
                startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
                $('#kt_datepicker_4_8').datepicker('setStartDate', startDate);

            });

        $('#kt_datepicker_4_8').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });


        $('#kt_datepicker_4_9').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        }).on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#kt_datepicker_4_10').datepicker('setStartDate', startDate);

        });

        $('#kt_datepicker_4_10').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });


        $('#kt_datepicker_4_11').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        }).on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#kt_datepicker_4_12').datepicker('setStartDate', startDate);

        });

        $('#kt_datepicker_4_12').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });

        $('#kt_datepicker_4_13').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        }).on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#kt_datepicker_4_14').datepicker('setStartDate', startDate);

        });

        $('#kt_datepicker_4_14').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });

        // llll

        $('#kt_datepicker_4_15').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        }).on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#kt_datepicker_4_16').datepicker('setStartDate', startDate);

        });

        $('#kt_datepicker_4_16').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });

        $('#kt_datepicker_4_17').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        }).on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#kt_datepicker_4_18').datepicker('setStartDate', startDate);

        });

        $('#kt_datepicker_4_18').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });


        $('#kt_datepicker_4_19').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        }).on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#kt_datepicker_4_20').datepicker('setStartDate', startDate);

        });

        $('#kt_datepicker_4_20').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });

        $('#kt_datepicker_4_21').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        }).on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#kt_datepicker_4_22').datepicker('setStartDate', startDate);

        });

        $('#kt_datepicker_4_22').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });

        $('#kt_datepicker_4_23').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        }).on('changeDate', function(selected) {
            var startDate = new Date(selected.date.valueOf());
            startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
            $('#kt_datepicker_4_24').datepicker('setStartDate', startDate);

        });

        $('#kt_datepicker_4_24').datepicker({
            rtl: KTUtil.isRTL(),
            orientation: "bottom left",
            todayHighlight: true,
            templates: arrows,
            endDate: new Date()
        });

    }
    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

jQuery(document).ready(function() {
    KTBootstrapDatepicker.init();
});