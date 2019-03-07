$(function () {    

    $('#hashtag').html(hashtag);

    var mapster = function () {

        //$('#colombia').mapster('resize');

        //$('#colombia-container').append('<img id="colombia" src="img/map.png" alt="" usemap="#colombia-regions" class="img-fluid">');

        $('#colombia').mapster({
            clickNavigate: true,
                render_highlight: {
                altImageOpacity: 1,
                fillOpacity: 1,
                fillColor: 'ffffff',
                altImage: themeDirectory + '/img/map-highlight.png',
                fadeDuration: 100
            },
                mapKey: 'data-key',
                areas: [
                {
                    key: 'north',
                    isSelectable: false
                },
                {
                    key: 'center',
                    isSelectable: false
                },
                {
                    key: 'south',
                    isSelectable: false
                }
            ]
        });
    }

    //mapster();

    // var doit;

    // $(window).resize(function() {
        
    //     //TODO

    //     clearTimeout(doit);

    //     doit = setTimeout(function () {

    //         console.log('resize')

    //         $('#mapster_wrap_0').css('width', '')

    //         $('#colombia').mapster('resize', $('#mapster_wrap_0').width());
    //     }, 200);
    // });

    //Twitter
    var nTweets = 6;

    var twitter = function () {

        showLoading();

        $('#feed').append('<h4 class="text-center p-3 loading">Cargando...</h4>');

        var configProfile = {
            "profile": {"screenName": 'JERobledo'},
            "domId": '',
            "maxTweets": nTweets,
            "enableLinks": true, 
            "showUser": true,
            "showTime": true,
            "showImages": true,
            "customCallback": handleTweets,
            "showInteraction": false,
            "dataOnly": true,
            "lang": 'es'
        };
        twitterFetcher.fetch(configProfile);
    }

    twitter();

    $('#feed .twitter-more').click(function () {
        
        $('#feed > .card-columns').empty();

        nTweets =  nTweets + 6;

        twitter();
    })

    $('#scratchcard').wScratchPad({
        size: $(window).width() / 20,
        bg: themeDirectory + '/img/especial-2.png',
        fg: themeDirectory + '/img/especial-1.png',
        'cursor': 'url("' + themeDirectory + '/img/coin.png") 5 5, default',
        scratchMove: function (e, percent) {

            if (percent > 95) {

                $('#scratchcard').addClass('done');

                location.href = 'aderrotarlacorrupcion';
            }
        }
    });

    $('#meme').click(function () {

        location.href = homeUrl + '/crea-tu-meme#' + $('#meme-text').val();
    });
})

function handleTweets(tweets) {

    var x = tweets.length;
    var n = 0;

    var row = $('#feed > .card-columns');

    var periscope;

    while (n < x) {

        var author = $('<div>' + tweets[n].author + '</div>');
        author.find('.u-hiddenVisually').html('<i class="fa fa-check-circle" aria-hidden="true"></i>');

        author = author.html();

        var content; 

        if (tweets[n].tweet.indexOf('https://www.periscope.tv/') > 0) {

            var element = $('<div>' + tweets[n].tweet + '</div>');  

            var link = element.find("[rel='nofollow noopener']");

            element.append('<a href="' + link.data('expanded-url') + '"><img src="http://www.robledopresidente.elchapin.co/img/periscope.png" class="img-fluid"></a>');

            link.remove();

            content = element.html();
        }
        else if (tweets[n].tweet.indexOf('youtube.com') > 0 || tweets[n].tweet.indexOf('youtu.be') > 0) {

            var element = $('<div>' + tweets[n].tweet + '</div>');  

            var link = element.find("[rel='nofollow noopener']");

            var vid;

            if (tweets[n].tweet.indexOf('youtube.com'))
                vid = link.data('expanded-url').replace('https://www.youtube.com/watch?v=', '');
            else
                vid = link.data('expanded-url').replace('https://youtu.be/', '');

            element.append('<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="http://www.youtube.com/embed/' + vid + '" allowfullscreen=""></iframe></div>');

            link.remove();

            content = element.html();
        }
        else
            content = tweets[n].tweet;

        row.append(
            `<div class="col no-gutters card` 
                + (author.indexOf('https://twitter.com/JERobledo') < 0 ? ' rt' : '') + `">`
                + (tweets[n].image ? ('<a href="' + tweets[n].permalinkURL + '" target="_blank"><div class="t-video-preview"><i class="fa fa-play-circle-o fa-4x' + (tweets[n].image.indexOf('video') > 0 ? '' : 'd-none') + '"></i><img src="' + tweets[n].image + '" class="card-img-top img-fluid t-video"></div></a>') : '') +
                    `<div class="card-body">
                        <div class="user">` + author + `</div>
                        <div class="tweet">` + content + `</div>
                        <a href="https://twitter.com/intent/reply?tweet_id=${tweets[n].tid}" class="card-link" target="_blank"><i class="fa fa-reply" aria-hidden="true"></i> Responder</a>
                        <a href="https://twitter.com/intent/retweet?tweet_id=${tweets[n].tid}" class="card-link" target="_blank"><i class="fa fa-retweet" aria-hidden="true"></i> Retweet</a>
                        <a href="https://twitter.com/intent/favorite?tweet_id=${tweets[n].tid}" class="card-link" target="_blank"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
                        <a href="${tweets[n].permalinkURL}" class="card-link" target="_blank">${tweets[n].time}</a></p>
                    </div>
                </div>
            </div>`
        );
        
        n++;
    }

    hideLoading();

    $('#feed .loading').remove();
}