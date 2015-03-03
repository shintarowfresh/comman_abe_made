<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-611754-1', 'auto');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

FB.Event.subscribe('edge.create', function(targetUrl) {ga('send', 'social', 'facebook', 'like', targetUrl);});
FB.Event.subscribe('edge.remove', function(targetUrl) {ga('send', 'social', 'facebook', 'unlike', targetUrl);});
FB.Event.subscribe('message.send', function(targetUrl) {ga('send', 'social', 'facebook', 'send', targetUrl);});
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
twttr.ready(function (twttr) {twttr.events.bind('click', function (e) {ga('send', 'social', 'twitter', 'click', window.location.href); });
twttr.events.bind('tweet', function (e) {ga('send', 'social', 'twitter', 'tweet', window.location.href);});});
</script>