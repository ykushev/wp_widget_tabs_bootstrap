(function ($) {
    $(document).ready(function () {
        
        $('.mytabs').addClass('tab-content').wrap('<div></div>').parent().prepend('<ul class="nav nav-pills nav-justified" role="tablist"></ul>');
        var $headings = $('.mytabs').parent().find('.nav');
        $('.mytabs').find('.tab-pane').each(function (index) {
            if (index == 0) $(this).addClass('active in');
            var name = $(this).attr('id');
            if (index == 0) $(this).find('li[role="presentation"]').addClass('active').detach().appendTo($headings).find('a').attr('href','#'+name).attr('aria-controls','#'+name);
            else $(this).find('li[role="presentation"]').detach().appendTo($headings).find('a').attr('href','#'+name).attr('aria-controls','#'+name);
            $(this).find('li[role="presentation"]').remove();
            $(this).find('a[href="#"]').remove();
        });   
        
    });
}) (jQuery);