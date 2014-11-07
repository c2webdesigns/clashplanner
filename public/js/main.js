(function(){

    /**
     * Facebook embed
     */
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=638198722967891&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    /**
     * Animations
     */
    $('#home-jumbo-image').addClass('animated bounceInLeft');

    /**
     * Enquire.js Media Query Stuff
     */
    enquire.register("screen and (max-width:768px)", {

        deferSetup : true,
        match : function() {
            $('#main-nav-links').addClass('nav-stacked').removeClass('pull-right');
        },
         unmatch : function() {
            $('#main-nav-links').removeClass('nav-stacked').addClass('pull-right');
        }

    });

    /**
     * Random Hacks
     */
    if (window.location.hash == '#_=_') {
        window.location.hash = ''; // for older browsers, leaves a # behind
        history.pushState('', document.title, window.location.pathname); // nice and clean
        e.preventDefault(); // no page reload
    }

})();

// $('#main-nav-links').addClass('nav-stacked');