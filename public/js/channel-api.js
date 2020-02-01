
var chName = "UC7tn7va308NzNgVKc1RG5qg";
$(document).ready(function(){
    $.get(
        "https://www.googleapis.com/youtube/v3/channels",{
            part : "contentDetails",
            id: chName,
            key: "AIzaSyA9l0tuo2zcxdjYs2gPfCmo5JructSFwjU"},
            function(data) {
                $.each(data.items, function(i, item) {
                    console.log(item);
                    var pid = item.contentDetails.relatedPlaylists.uploads;
                    getChal(pid);
                })
            }

    );
    function getChal(pid) {
        $.get(
            "https://www.googleapis.com/youtube/v3/playlistItems",{
                part : "snippet",
                maxResults: 5,
                playlistId: pid,
                key: "AIzaSyA9l0tuo2zcxdjYs2gPfCmo5JructSFwjU"},
                function(data) {
                    var output;
                    $.each(data.items, function(i, item) {
                        console.log(item);
                       videoTitle = item.snippet.title;
                       videoId = item.snippet.resourceId.videoId;
                       output = '<iframe src=\"\\www.youtube.com/embed/'+videoId+'\" width="460px" height="360px"></iframe><br>';
                       $("#result").append(output);
                    })
                }

        );
    }
});
