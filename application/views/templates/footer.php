	<footer id="footer" class="midnight-blue">
		<div class="container">
			<div class="row">
                <div class="col-sm-6">
                	<ul>
                        
                    </ul>
                </div>
                <div class="col-sm-6">
					<p class="pull-right"> &copy; Redes evang&eacute;licas - Todos los derechos reservados.<br></p>
				</div>
			</div>
		</div>
	</footer>
		<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyD3v08DqpB_oPV6UYljRryuk7ZEKR9yOF4&libraries=places"></script>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?=base_url('')."/assets/js/maps.js"?>"></script>
		<script type="text/javascript" src="<?=base_url('')."/assets/js/api.js"?>"></script>
		<script type="text/javascript">
		  (function(){
		    var widgetIframe = document.getElementById('sc-widget'),
		        widget       = SC.Widget(widgetIframe);

		    widget.bind(SC.Widget.Events.READY, function() {
		      widget.bind(SC.Widget.Events.PLAY, function() {
		        // get information about currently playing sound
		        widget.getCurrentSound(function(currentSound) {
		          console.log('sound ' + currentSound.get('') + 'began to play');
		        });
		      });
		      // get current level of volume
		      widget.getVolume(function(volume) {
		        console.log('current volume value is ' + volume);
		      });
		      // set new volume level
		      widget.setVolume(50);
		      // get the value of the current position
		    });

		  }());
		</script>
		</script>
	    <script type="text/javascript">
	        google.load("feeds", "1") //Load Google Ajax Feed API (version 1)
	    </script>
	    <script type="text/javascript">
            var feedcontainer=document.getElementById("news")
            var feedurl="http://www.noticiacristiana.com/feed"
            var feedlimit=5
            var rssoutput=""

            function rssfeedsetup(){
                var feedpointer=new google.feeds.Feed(feedurl) //Google Feed API method
                feedpointer.setNumEntries(feedlimit) //Google Feed API method
                feedpointer.load(displayfeed) //Google Feed API method
            }

            function displayfeed(result){
                if (!result.error){
	                var thefeeds=result.feed.entries
	                for (var i=0; i<thefeeds.length; i++)
	                rssoutput+="<p><a href='" + thefeeds[i].link + "'>" + thefeeds[i].title + "</a><br></p>"
	                feedcontainer.innerHTML=rssoutput
            	}
            else
                alert("Error fetching feeds!")
            }

            window.onload=function(){
                rssfeedsetup()
                $(function () {
				    Map.options.scrollwheel = false; // Esto desaciva el zoom cuando se hace scroll
					Map.coords = {
						lat: 19.5424616,
						lng: -96.9093856,
					};
					Map.init( $$('#mapa'), function (map) {
						// Do something here whe your maps its loaded
					});
				});
            }

        </script>
		
		<script src="<?=base_url('')."assets/js/bootstrap.min.js"?>"></script>
	</body>
</html>