<div class="infoBoxIRC">
	<div class="containerIcon"><img src="{icon}ircM.png{/icon}" alt="" />
	</div>
	<div class="containerContent">
		<h3>{lang}wcf.irc.index{/lang}</h3> 
		<p class="smallFont">
		{foreach from=$channelData item=channelItem}
			<a href="index.php?page=IRC&channel={$channelItem.name}">#{$channelItem.name}</a>: 
			{implode from=$channelItem.user item=user glue=", "}{$user}{/implode}
			<br />
		{/foreach}
		</p>
	</div>
</div>