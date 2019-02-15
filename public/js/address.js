$(document).ready(function(){
    
   var ht = $(window).height();
   var wth = $(window).width();
    var url = "https://ip-api.com/json";
    
    $.get(url, function(response) {
        
         var 
           r = response,

           address = {
           height:ht,
           width:wth, 
           path:window.location.pathname,
           country: r.countryCode,
           city: r.city,
           region: r.region,
           zip : r.zip
                   };
        
          $.ajax(
               {url:"/",
                method:"post", 
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: address,
                success:function(data){
               console.log(data);
                },
                error:function(err,msg){
                  console.log("error: "+msg);
                }
               });
    }, "json")
    .fail(function(){
        $.ajax(
               {url:"/",
                method:"post", 
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data:{ height:ht,width:wth,path:window.location.pathname},
                success:function(data){
               console.log(data);
                },
                error:function(err,msg){
                  console.log("error: "+msg);
                }
               });
    });



    
});
    
 