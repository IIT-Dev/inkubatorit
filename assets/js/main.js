$(document).ready(function(){
    if($(".content-wrap").height() > 300){
        $(".content-main").niceScroll({cursorcolor:"#898989",cursoropacitymin:1,cursorwidth:"3px",cursorborderround:"0px"});
    }
    $(".read-blog-content").niceScroll({cursorcolor:"#898989",cursoropacitymin:1,cursorwidth:"3px",cursorborderround:"0px"});
    $(".addblog-content").niceScroll({cursorcolor:"#898989",cursoropacitymin:1,cursorwidth:"3px",cursorborderround:"0px"});
    $("body").niceScroll({cursorcolor:"#898989",cursoropacitymin:1});
    
    $(".nav-item").click(function(){
        var id=$(this).attr("id");
        id = id.split("-")[1];
        if(id!=site){
            document.location=baseurl+"main/"+id;
        }
    });
});