//-------------------------------------------
// THIS IS NOT A PART OF THE PLUGIN. 
// ONLY FOR THE DEMO.
//-------------------------------------------
!(function(){
    'use strict';

	var numOfImages = window.location.search ? parseInt(window.location.search.match(/\d+$/)[0]) : 70,
		gallery = $('#gallery'),
		videos = [
			// {
			// 	title: "Victoria's Secret",
			// 	url: "https://player.vimeo.com/video/8974462?byline=0&portrait=0",
			// 	thumb: "https://b.vimeocdn.com/ts/432/699/43269900_100.jpg"
			// },
			{
				title: "棄佛入魔 - 殘雪",
				url: 'https://www.youtube.com/embed/LUBSTdjthnc?autoplay=1',	//"https://www.youtube.com/watch?v=LUBSTdjthnc",
				thumb: "https://img.youtube.com/vi/LUBSTdjthnc/1.jpg"
			},
			{
				title: "無期 - 光頭華夏",
				url: 'https://www.youtube.com/embed/biRiUL3u2v0??playlist=biRiUL3u2v0&loop=1&autoplay=1',
				thumb: "https://img.youtube.com/vi/biRiUL3u2v0/1.jpg"
			},
			{
				title: "我這一生 - 半噸兄弟 (馬健濤)",
				url: 'https://www.youtube.com/embed/kQjwEs1k69I?autoplay=1',
				thumb: "https://img.youtube.com/vi/kQjwEs1k69I/1.jpg"
			},
			{
				title: "本無 - 光頭華夏",
				url: 'https://www.youtube.com/embed/OJq7qksbMBU?autoplay=1',
				thumb: "https://img.youtube.com/vi/OJq7qksbMBU/1.jpg"
			},
			{
				title: "孤芳自賞 - 楊小壯",
				url: 'https://www.youtube.com/embed/uIxnUXz1ju8?autoplay=1',
				thumb: "https://img.youtube.com/vi/uIxnUXz1ju8/1.jpg"
			},
			{
				title: "Something Just Like This",
				url: 'https://www.youtube.com/embed/OJ7gRR-z4bY?autoplay=1',
				thumb: "https://img.youtube.com/vi/OJ7gRR-z4bY/1.jpg"
			},
			{
				title: "天使的翅膀 - 徐譽滕",
				url: 'https://www.youtube.com/embed/BIzvvsBbwOs?autoplay=1',
				thumb: "https://img.youtube.com/vi/BIzvvsBbwOs/1.jpg"
			},
			{
				title: "月老掉線 - 王不醒",
				url: 'https://www.youtube.com/embed/1zjeruuymO0?autoplay=1',
				thumb: "https://img.youtube.com/vi/1zjeruuymO0/1.jpg"
			},
			{
				title: "醒不來的夢 - 回小仙",
				url: 'https://www.youtube.com/embed/pkv7uWILF_c?autoplay=1',
				thumb: "https://img.youtube.com/vi/pkv7uWILF_c/1.jpg"
			},


			// {
			// 	title: "Biting Elbows - 'Bad Motherfucker' Official Music Video",
			// 	url: "https://player.vimeo.com/video/62092214?byline=0&portrait=0",
			// 	thumb: "https://b.vimeocdn.com/ts/431/797/431797120_100.jpg"
			// }
			{
				title: "兄弟抱一下 - 龐龍",
				url: 'https://www.youtube.com/embed/O_cyIdH8j9k?autoplay=1',
				thumb: "https://img.youtube.com/vi/O_cyIdH8j9k/1.jpg"
			}	//end 無逗號
		];
		
    // Get some photos from Flickr for the demo
    $.ajax({
        url: 'https://api.flickr.com/services/rest/',
        data: {
            format: 'json',
            method: 'flickr.interestingness.getList',
			per_page : numOfImages,
            api_key: 'b51d3a7c3988ba6052e25cb152aecba2' // this is my own API key, please use yours
        },
	    dataType: 'jsonp',
        jsonp: 'jsoncallback'
    })
	.done(function (data){
        var loadedIndex = 1, isVideo;
		
		// add the videos to the collection
		data.photos.photo = data.photos.photo.concat(videos);
		
        $.each( data.photos.photo, function(index, photo){
			isVideo = photo.thumb ? true : false;
			// http://www.flickr.com/services/api/misc.urls.html
            var url = 'http://farm' + photo.farm + '.static.flickr.com/' + photo.server + '/' + photo.id + '_' + photo.secret,
				img = document.createElement('img');
			
			// lazy show the photos one by one
			img.onload = function(e){
				img.onload = null;
				var link = document.createElement('a'),
				li = document.createElement('li')
				link.href = this.largeUrl;

				link.appendChild(this);
				if( this.isVideo ){
					link.rel = 'video';
					li.className = 'video'
				}
				li.appendChild(link);
				gallery[0].appendChild(li);
			
				setTimeout( function(){ 
					$(li).addClass('loaded');
				}, 25*loadedIndex++);
			};
			
			img['largeUrl'] = isVideo ? photo.url : url + '_b.jpg';
			img['isVideo'] = isVideo;
			img.src = isVideo ? photo.thumb : url + '_t.jpg';
			img.title = photo.title;
        });

		// finally, initialize photobox on all retrieved images
		$('#gallery').photobox('a', { thumbs:true }, callback);
		// using setTimeout to make sure all images were in the DOM, before the history.load() function is looking them up to match the url hash
		setTimeout(window._photobox.history.load, 1000);
		function callback(){
			console.log('callback for loaded content:', this);
		};
    });
})();