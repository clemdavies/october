// clem/steam
$(document).ready(function(){
  var feed = $('#clemfeed-steamlibrary');
    feed.request('onLoadFeed',{
        success:function(data){
            feed.append(data.head);
            feed.append(data.body);
        }
    });
    /*
    feed.on('click',function(i,e){

        var rank = feed.find('.list-group-item').last().attr('rank');
        console.log(rank);

        feed.request('onAppendFeed',{
            data: { rank: rank },
            success:function(data){
                if (data.init) {
                    feed.empty();
                    feed.append(data.head);
                    feed.append(data.body);
                }else{
                    feed.find('.list-group-item').last().after(data.item);
                }
            }
        });
    });
*/
});
