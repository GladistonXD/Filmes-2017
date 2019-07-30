<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Canais Gratis Player</title>
<link rel="stylesheet" href="https://ego.show/css/embed.min.css?v=0.1" />
<style type="text/css">
#player {
position: absolute;
top: 0;
left: 0;
bottom: 0;
height: 100%;
width: 100%;
border: 0;
overflow: hidden;
}
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cometa.top/player3/pops-mobile.js?5" ></script>
</head>
<body>
<div class="jwplayer jw-reset jw-skin-glow" id="player"></div>
<div id="btn-unmute" onclick="WSUnmute()">AUMENTAR VOLUME</div>
<div class="tb stream-offline" >
  <div class="tb-col">
    <img src="https://i.imgur.com/jVMrXxn.png" /></a>
    <h2>STREAM IS OFFLINE</h2>
    <p>Reconectando em <span class="counter"></span> segundos</p>
  </div>
</div>
<script src="https://ego.show/css/jquery.min.js"></script>
<script>var WSreloadCounter,WSnTries=0,videoStarted = false, startMuted = startMuted();WSref='6ie6tl1';function errorPlaying(){$(".stream-offline .counter").text(0);$(".stream-offline").css("display","table");WSreloadCounter=setInterval(function(){var a=$(".stream-offline .counter").text();if(a>1){a--;$(".stream-offline .counter").text(a)}else{ clearInterval(WSreloadCounter);WSnTries++;if(WSnTries<0){WSreloadStream();}else{ window.location.reload() } }},1000)}function startMuted(){var d=/constructor/i.test(window.HTMLElement)||(function(a){return a.toString()==="[object SafariRemoteNotification]"})(!window.safari||(typeof safari!=="undefined"&&safari.pushNotification));if(d){return true}var c=!!window.chrome&&!!window.chrome.webstore;if(c&&getChromeVersion()>=66){return true}return false}function getChromeVersion(){var a=navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./);return a?parseInt(a[2],10):false};</script>
    <script src="https://cometa.top/player3/p2pcore2.js?2"></script>
    <script src="https://cdn.jsdelivr.net/npm/p2p-media-loader-hlsjs@latest/build/p2p-media-loader-hlsjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/clappr@latest"></script>
	<script src="https://cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>
    <script>
	
        if (p2pml.hlsjs.Engine.isSupported()) {
            var engine = new p2pml.hlsjs.Engine();

            var player = new Clappr.Player({
                parentId: "#player",
                source: "https://d1lud49pck8hpm.cloudfront.net/hls1/.m3u8?wmsAuthSign=c2VydmVyX3RpbWU9Ny8zMC8yMDE5IDU6NDY6NDggUE0maGFzaF92YWx1ZT1leUlTYXNNcEJLSFQyWktCQXdDUG9RPT0mdmFsaWRtaW51dGVzPTYwJmlkPTU=",
				poster: "https://cometa.top/player3/imgs-videos/RCServer03/imgs-videos/.jpg?1",
                mute: false,
                autoPlay: true,
				width: "100%",
				height: "100%",
                playback: {
                    hlsjsConfig: {
						maxBufferLength:1000,
						maxMaxBufferLength:2000,
						startPosition:1,
                        loader: engine.createLoaderClass()
                    }
                },
				events:
			{
			onError:function(e)
				{
				errorPlaying()
			}
			,onPlay:function(e)
				{
				setTimeout(function()
					{
					$(".stream-logo").fadeOut()
				}
				,1000);
				if(!videoStarted)
					{
					videoStarted=true;
					setTimeout(function()
						{
						$.post("",
							{
							"ref":"6ie6tl1","a":"play"
						}
						)
					}
					,15000);
					
				}
			}
			,onPause:function(e)
				{
				$(".stream-logo").fadeIn()
			}
			,onVolumeUpdate:function(e)
				{
				$("#btn-unmute").fadeOut()
			}
			,
		}
	}
	);
	setTimeout(function()
		{
		player.play()
	}
	,1),   
p2pml.hlsjs.initClapprPlayer(player);
        } else {
            document.write("Este navegador/browser nao e suportado. Baixe e utilize o navegador Google Chrome e tenha total acesso! :(");
        }
function WSreloadStream()
	{
	$(".stream-offline").css("display","none");
	var newplayer=player.configure(player);
	newplayer=new Clappr.Player(newplayer.options);
	player.destroy();
	player=newplayer;
	player.play();
	player.unmute()
}
function WSUnmute()
	{
	player.unmute()
}
</script>
<iframe src="../contador.php?static=true" frameborder="0" scrolling="no" width="0" height="0"></iframe>
</body>
</html>
