//Genre Ajax Filtering
jQuery(function($)
{
    //Load posts on page load
    genre_get_posts();
    //$('#genre-filter li.term_id_30 input').attr('checked', true);
    //$('#genre-filter li.term_id_31 input').attr('checked', true);
    function filterClick() {
        
    }
    //If list item is clicked, trigger input change and add css class
    $('#genre-filter div.filter').on('click', function(){
        var input = $(this).find('input');
        
        if ( $(this).attr('class') == 'clear-all' )
        {
            $('#genre-filter div.filter').removeClass('selected').find('input').prop('checked',false);
            genre_get_posts();
        }
        else if (input.is(':checked'))
        {
            input.prop('checked', false);
            $(this).removeClass('selected');
        } else {
            input.prop('checked', true);
            $(this).addClass('selected');    
        }

        input.trigger("change");
    });

    $('#slider_price').on('slidechange', function(){
        var input = $(this).find('input');
        genre_get_posts();
    });
    
    //If input is changed, load posts
    $('#genre-filter input').on('change', function(){
        genre_get_posts(); //Load Posts
    });
    
    //Find Selected Sale
    function getSelectedGenre()
    {

        var genre = [];
        var sale = [];
        var days = [];
        var diff = [];
        var month = [];
        
        $("#genre-filter div#sale input").each(function() {
                var max = $('div.max').data('max');
              var min = $('div.min').data('min');
                $('div.max').html(max);
                $('div.min').html(min);

                var val = $(this).val();

                sale.push(val);
                if (sale == '') {
                    sale = [ min, max ];
                }
            });

        $("#genre-filter div#days input:checked").each(function() {
                var val = $(this).val();
                days.push(val);
            });    

        $("#genre-filter div#diff input:checked").each(function() {
                var val = $(this).val();
                diff.push(val);
            });

        $("#genre-filter div#month input:checked").each(function() {
                var val = $(this).val();
                month.push(val);
            });


        if (days != '') {
            $("#genre-filter div#days input:checked").each(function() {
                var val = $(this).val();
                days.push(val);
            });    
        } else {
            $("#genre-filter div#days input").each(function() {
                var val = $(this).val();
                days.push(val);
            });    
        }    

        if (diff != '') {
            $("#genre-filter div#diff input:checked").each(function() {
                var val = $(this).val();
                diff.push(val);
            });
        } else {
            $("#genre-filter div#diff input").each(function() {
                var val = $(this).val();
                diff.push(val);
            });
        }

        if (month != '') {
            $("#genre-filter div#month input:checked").each(function() {
                var val = $(this).val();
                month.push(val);
            });
        } else {
            $("#genre-filter div#month input").each(function() {
                var val = $(this).val();
                month.push(val);
            });
        }

        genre.push(sale);
        genre.push(days);
        genre.push(diff);
        genre.push(month);
        return genre;
    }
    
    //Get Search Form Values
    function getSearchValue()
    {
        var searchValue = $('#genre-search input.text-search').val();    
        return searchValue;
    }

    
    //Main ajax function
    function genre_get_posts(paged)
    {
        var paged_value = paged;
        var catit =  $(".catit").data('cat');
        var typeit =  $(".typeit").data('type');
        var ajax_url = ajax_genre_params.ajax_url;
        console.log(catit);

        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
                action: 'genre_filter',
                genre: getSelectedGenre,
                search: getSearchValue(),
                paged: paged_value,
                cat: catit,
                type: typeit
            },
            beforeSend: function ()
            {
                //Show loader here
            },
            success: function(data)
            {

                 // Append new blocks
        jQuery('#genre-results').html(data)/*.masonry('reloadItems')*/;

                $('.service-nice-1').niceSelect();

                var maxpages = $("#maxpages").data('maxpag');
                console.log(maxpages);
                var cond = (maxpages > 1 );
                console.log(cond);
                if ( cond ) {
                  $('#true_loadmore').show('Загрузить ещё');
                } else {
                  $('#true_loadmore').hide();
                }

            },
            error: function()
            {
                $("#genre-results").html('<p>There has been an error</p>');
            }
        });                
    }


    $('#genre-filter #true_loadmore').on('click', function(){
        var paged = document.getElementById('paged').innerHTML;
        paged++;
        $("#paged").html(paged);
        console.log(paged);
        genre_loadmore(paged); //Load Posts (feed in paged value)
    });

    //Main ajax function
    function genre_loadmore(paged)
    {
        var paged_value = paged;
        var catit =  $(".catit").data('cat');
        var typeit =  $(".typeit").data('type');
        var ajax_url = ajax_genre_params.ajax_url;

        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
                action: 'genre_filter',
                genre: getSelectedGenre,
                search: getSearchValue(),
                paged: paged_value,
                cat: catit,
                type: typeit
            },
            beforeSend: function ()
            {
                //Show loader here
            },
            success: function(data)
            {

                 // Append new blocks
        jQuery('#genre-results').append(data).masonry('reloadItems');


                $('.service-nice-' + paged).niceSelect();

                var maxpages = document.getElementById('maxpages').innerHTML;

                if ( maxpages == paged ) {
                  $('#true_loadmore').hide();
                } else {
                  $('#true_loadmore').text('Загрузить ещё');
                } 

            },
            error: function()
            {
                $("#genre-results").html('<p>There has been an error</p>');
            }
        });                
    }

});