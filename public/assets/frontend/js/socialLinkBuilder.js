/*!
 * SocialLinksBuilder v1.2.0
 * A jQuery Plugin that builds the social links for you
 * also includes an email and telephone link
 *
 * Licensed MIT for open source use
 *
 * Source: https://github.com/zeraphie/socialLinkBuilder/
 *
 * Copyright 2017 Izzy Skye
 */
(function($){
    $.fn.socialLinkBuilder = function(opts){
        var win = window;
        var bod = $('body');
        var soc = $(this);

        /**
         * Cut a string to max 140 characters, making sure to end on a word and
         * remove any stray punctuation from the end
         *
         * @param text
         * @param length
         * @returns {*}
         */
        function excerptify(text, length){
            length = length || 140;
            var punc = ['.','!','?',',',';',':'];
            if(text.length > length) {
                var spaceAt = length;
                if(text.indexOf(' ') > -1){
                    while(spaceAt--){
                        if(text.charAt(spaceAt) === ' ') break;
                    }
                }
                var excerpt = text.substring(0, spaceAt);
                for (var i = punc.length - 1; i >= 0; i--) {
                    if(excerpt.slice(-1) === punc[i]){
                        excerpt = excerpt.slice(0, -1);
                    }
                }
                return excerpt.trim();
            } else {
                return text;
            }
        }

        opts = $.extend(true, {
            url: win.location.href,
            title: bod.find('h1').filter(function(){
                return ($.trim($(this).text()).length);
            }).first().text() || '',
            text: excerptify(bod.find('p').filter(function(){
                return ($.trim($(this).text()).length);
            }).first().text()) || '',
            facebook: {
                isUsed: true,
                order: 0
            },
            twitter: {
                isUsed: true,
                order: 10
            },
            linkedin: {
                isUsed: true,
                order: 20
            },
            gplus: {
                isUsed: false,
                order: 30
            },
            print: {
                isUsed: false,
                order: 40
            },
            email: {
                isUsed: false,
                order: 50,
                mailto: ''
            },
            tel: {
                isUsed: false,
                order: 60,
                tel: ''
            }
        }, opts);

        var social = [];
        var icon = '';

        /**
         * Add the facebook share link
         */
        if(opts.facebook.isUsed){
            var fbsvg = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="470.5" height="470.5" viewBox="0 0 470.5 470.5" xml:space="preserve" fill="rgb(0, 0, 0)"><style>.s0{fill:rgb(0, 0, 0);}</style><path d="M271.5 154.2v-40.5c0-6.1 0.3-10.8 0.8-14.1 0.6-3.3 1.9-6.6 3.9-9.9 2-3.2 5.2-5.5 9.7-6.7 4.5-1.2 10.4-1.9 17.9-1.9h40.5V0h-64.8c-37.5 0-64.4 8.9-80.8 26.7 -16.4 17.8-24.6 44-24.6 78.7v48.8h-48.5v81.1h48.5v235.3h97.4V235.3h64.8l8.6-81.1H271.5z" fill="#4267B2"></path></svg>';
            var fblink = 'http://facebook.com/sharer/sharer.php';
            fblink += '?u=' + encodeURIComponent(opts.url);

            icon = '';

            icon += '<a href="'+fblink+'" class="facebook" target="_blank" rel="external nofollow">';
            if(typeof opts.facebook.svg === 'string' && opts.facebook.svg !== ''){
                icon += opts.facebook.svg;
            } else {
                icon += fbsvg;
            }
            icon += '</a>';

            social.push({
                icon: icon,
                order: opts.facebook.order
            });
        }

        /**
         * Add the twitter share link
         */
        if(opts.twitter.isUsed){
            var twsvg = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="450" height="450" viewBox="0 0 450 450" xml:space="preserve" fill="rgb(0, 0, 0)"><style>.s0{fill:rgb(0, 0, 0);}</style><path d="M450 85.7c-17.7 7.6-35.4 12.4-53.1 14.3 20-12 33.5-28.9 40.5-50.8 -18.3 10.8-37.8 18.3-58.5 22.3 -18.3-19.4-40.7-29.1-67.4-29.1 -25.5 0-47.2 9-65.2 27 -18 18-27 39.7-27 65.2 0 6.9 0.8 13.9 2.3 21.1 -37.7-1.9-73-11.4-106.1-28.4C82.5 110.2 54.4 87.5 31.4 59.1c-8.4 14.3-12.6 29.8-12.6 46.5 0 15.8 3.7 30.5 11.1 44 7.4 13.5 17.4 24.5 30 32.8 -14.8-0.6-28.7-4.5-41.7-11.7v1.1c0 22.3 7 41.8 21 58.7 14 16.8 31.6 27.5 53 31.8 -8 2.1-16.1 3.1-24.3 3.1 -5.3 0-11.1-0.5-17.4-1.4 5.9 18.5 16.8 33.6 32.5 45.5 15.8 11.9 33.7 18 53.7 18.4 -33.5 26.3-71.7 39.4-114.5 39.4 -8.2 0-15.6-0.4-22.3-1.1 42.8 27.6 90 41.4 141.6 41.4 32.7 0 63.5-5.2 92.2-15.6 28.7-10.4 53.3-24.3 73.7-41.7 20.4-17.4 37.9-37.4 52.7-60.1 14.8-22.7 25.7-46.3 33-70.9 7.2-24.7 10.8-49.3 10.8-74.1 0-5.3-0.1-9.3-0.3-12C421.8 120.2 437.2 104.3 450 85.7z" fill="#1DA1F2"></path></svg>';
            var twlink = 'http://twitter.com/intent/tweet/';
            twlink += '?text=' + encodeURIComponent(opts.text);
            twlink += '&url=' + encodeURIComponent(opts.url);

            icon = '';

            icon += '<a href="'+twlink+'" class="twitter" target="_blank" rel="external nofollow">';
            if(typeof opts.twitter.svg === 'string' && opts.twitter.svg !== ''){
                icon += opts.twitter.svg;
            } else {
                icon += twsvg;
            }
            icon += '</a>';

            social.push({
                icon: icon,
                order: opts.twitter.order
            });
        }

        /**
         * Add the linkedin share link
         */
        if(opts.linkedin.isUsed){
            var lisvg = '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="438.5" height="438.5" viewBox="0 0 438.5 438.5" xml:space="preserve" fill="rgb(0, 0, 0)"><style>.s0{fill:rgb(0, 0, 0);}</style><rect x="5.4" y="145.9" width="94.2" height="282.9" fill="#0077b5"></rect><path d="M408.8 171.7c-19.8-21.6-46-32.4-78.5-32.4 -12 0-22.9 1.5-32.7 4.4 -9.8 3-18.1 7.1-24.8 12.4 -6.8 5.3-12.1 10.3-16.1 14.8 -3.8 4.3-7.5 9.4-11.1 15.1v-40.2h-93.9l0.3 13.7c0.2 9.1 0.3 37.3 0.3 84.5 0 47.2-0.2 108.8-0.6 184.7h93.9V270.9c0-9.7 1-17.4 3.1-23.1 4-9.7 10-17.8 18.1-24.4 8.1-6.6 18.1-9.9 30.1-9.9 16.4 0 28.4 5.7 36.1 17 7.7 11.3 11.6 27 11.6 47V428.8h93.9V266.7C438.5 225 428.6 193.3 408.8 171.7zM53.1 9.7c-15.8 0-28.6 4.6-38.4 13.8C4.9 32.8 0 44.4 0 58.5c0 13.9 4.8 25.5 14.3 34.8 9.5 9.3 22.1 14 37.7 14h0.6c16 0 28.9-4.7 38.7-14 9.8-9.3 14.6-20.9 14.4-34.8 -0.2-14.1-5-25.7-14.6-35C81.6 14.3 68.9 9.7 53.1 9.7z" fill="#0077b5"></path></svg>';
            var lilink = 'http://www.linkedin.com/shareArticle';
            lilink += '?mini=true&';
            lilink += '&url=' + encodeURIComponent(opts.url);
            lilink += '&title=' + encodeURIComponent(opts.title);

            icon = '';

            icon += '<a href="'+lilink+'" class="linkedin" target="_blank" rel="external nofollow">';
            if(typeof opts.linkedin.svg === 'string' && opts.linkedin.svg !== ''){
                icon += opts.linkedin.svg;
            } else {
                icon += lisvg;
            }
            icon += '</a>';

            social.push({
                icon: icon,
                order: opts.linkedin.order
            });
        }

        /**
         * Append the social icons to the wrapper given after sorting them
         */
        social.sort(function(a, b){
            if(a.order < b.order){
                return -1;
            }

            if(a.order > b.order){
                return 1;
            }

            return 0;
        });

        for(var i = 0, len = social.length; i < len; i++){
            soc.append(social[i].icon);
        }

        /**
         * Bind the click event to open a popup window
         *
         * @type {string}
         */
        var clicked = (navigator.userAgent.match(/iPad/i)) ? 'touchstart' : 'click';
        soc.find('a:not(.print)').on(clicked,function(){
            var link = $(this).attr('href');
            var top = (screen.availHeight - 500) / 2;
            var left = (screen.availWidth - 500) / 2;
            var popup = window.open(
                link,
                'social sharing',
                'width=550,'+
                'height=420,'+
                'left='+ left +','+
                'top='+ top +','+
                'location=0,'+
                'menubar=0,'+
                'toolbar=0,'+
                'status=0,'+
                'scrollbars=1,'+
                'resizable=1'
            );

            return false;
        });

        /**
         * Bind the print button to print the page
         */
        soc.find('.print').on(clicked,function(){
            window.print();
            return false;
        });
    };
})(jQuery);
