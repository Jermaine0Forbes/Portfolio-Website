$(document).ready(function(){
    
   var ht = $(window).height();
   var wth = $(window).width();
    
    

    
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
    
 