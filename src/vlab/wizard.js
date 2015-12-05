$(document).ready(function() {
    $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('#rootwizard .progress-bar').css({width:$percent+'%'});
            }});


        $('#pills').bootstrapWizard({'tabClass': 'nav nav-pills', 'debug': false, onShow: function(tab, navigation, index) {
            console.log('onShow');
            }, onNext: function(tab, navigation, index) {
                console.log('onNext');
            }, onPrevious: function(tab, navigation, index) {
                console.log('onPrevious');
            }, onLast: function(tab, navigation, index) {
                console.log('onLast');
            }, onTabClick: function(tab, navigation, index) {
                console.log('onTabClick');
                alert('on tab click disabled');
            }, onTabShow: function(tab, navigation, index) {
                console.log('onTabShow');
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#pills .progress-bar').css({width:$percent+'%'});
            }});
        $('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-pills'});
        // Disable step
        $('#disable-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('disable', $('#stepid').val());
                });
        // Enable step
        $('#enable-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('enable', $('#stepid').val());
                });
        // Remove step
        $('#remove-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('remove', $('#stepid').val(), true);
                });
        // Show step
        $('#show-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('display', $('#stepid').val());
                });
        // Hide step
        $('#hide-step').on('click', function() {
            $('#rootwizard').bootstrapWizard('hide', $('#stepid').val());
                });
        var $validator = $("#commentForm").validate({
            rules: {
                emailfield: {
                    required: true,
                        email: true,
                        minlength: 3
},
namefield: {
    required: true,
        minlength: 3
},
urlfield: {
    required: true,
        minlength: 3,
        url: true
}
}
});
$('#rootwizard').bootstrapWizard({
    'tabClass': 'nav nav-pills',
        'onNext': function(tab, navigation, index) {
            var $valid = $("#commentForm").valid();
            if(!$valid) {
                $validator.focusInvalid();
                return false;
        }
        }
        });
window.prettyPrint && prettyPrint()
    });
