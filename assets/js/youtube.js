unsafeWindow.yt.pubsub.instance_.subscribe("init-watch", function(){  
    //log(unsafeWindow.location.href); // Current video url.  

    var player = document.getElementById('player');  
    var playlist = document.getElementById('watch-appbar-playlist');  

    if (player && playlist)  
        player.parentNode.insertBefore(playlist, player);  

    // @return ?  
});

GM_addStyle("body.ytwp-window-player #watch-appbar-playlist + #player { height: calc(100% - 30px) !important;min-height: inherit !important;max-height: inherit !important;}");  
GM_addStyle("body.ytwp-window-player #watch-appbar-playlist + #player.watch-playlist-collapsed { height: calc(100% - 400px) !important;  }");