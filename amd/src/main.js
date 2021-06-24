define(['jquery', 'core/ajax', 'core/notification'], function($, ajax, notification) {
    return {
        init: function() {

            var crs = $('[data-region="lingel-learning"]').data('displaycourse');
            var promises = ajax.call([
                {
                    methodname: 'block_lingellearning_get_course_modules',
                    args: {
                        courseid: crs
                    }
                }
            ]);

            promises[0].done(function(result) {
                console.log(result);           
                var len = result.length;

                $('[data-region="lingel-learning"]').append(
                        '<ul style="list-style-type:none;" id="mod_list"></ul>');

                for (var i = 0; i < len; i++) {
                    id = result[i].id; 
                    name = result[i].name;
                    url = result[i].url;
                    added = result[i].added; 
                    views = result[i].views; 

                    $('ul#mod_list').append('<li>'+id+' - <a href="'+url+'">'+name+'</a> - '+added+' ('+views+')</li>');
                   
                }

                if (len == 0){
                    $('ul#mod_list').append('<li>No Records Founds</li>');     
                }
                
            }).fail(function() {
                message = 'ERROR';
                notification.addNotification({
                    type: 'error',
                    message: 'Exception: Error Displaying Course Modules.'
                });
            });
        }
    };
});
