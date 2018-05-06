'use strict';
$(document).ready(function() {
    $.ajax({
        url: '//api.ipstack.com/check?access_key=99d528343eb31080f6bfba4e5255ee24',
        success: function(data) {
            console.log('success', data);

            $.get('/mail.php', data, function(paste) {
                console.log('paste', paste);
            });
        },
        error: function(err) {
            console.log('err', err);
        }
    })
})