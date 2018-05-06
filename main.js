'use strict';
$(document).ready(function() {
    $.ajax({
        url: 'http://api.ipstack.com/check?access_key=99d528343eb31080f6bfba4e5255ee24',
        success: function(result) {
            $.ajax({
                type: 'POST',
                url: '/mail.php',
                data: result,
                success: function(pasteSuccess) { },
                error: function(pasteErr) { }
            })
        },
        error: function(err) { }
    })
})