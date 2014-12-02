 var html = ""
 var apiurl = "http://api.flickr.com/services/feeds/photos_public.gne?&id=36654051@N07&text=-Mumfest&text=food&format=json&jsoncallback=?"
 
 //&tags=foodbank,fooddrive,donor,donation,donate,drive&tagmode=any
 
    $(document).ready(function(){
            console.log("document ready")
            $.getJSON(apiurl,function(json){
                console.log(json);
                $("#results").append(json);

                $.each(json.items,function(i,data){
                    //html += '<p id="flickrCaption">Caption:"'+ data.title+'"</p>';
html += '<a href="' + data.link+'"target="_blank"><img class="flickrImages" src="' + data.media.m + '"></a>'                    });
                console.log(html);
                $("#results").append(html);
            });
            
       
    });
