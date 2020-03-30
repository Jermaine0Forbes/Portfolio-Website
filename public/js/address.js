$(document).ready(function(){

   const ht = $(window).height(),
        wth = $(window).width(),
        location = window.location.pathname,
        page = $('meta[name="page"]').attr('content'),
        ajaxAct = $(".action-ajax"),
        token = $('meta[name="csrf-token"]').attr('content');

   let description = page+" page",
       action = "visit";

      ajaxAct.on("click", function(){
        description = $(this).attr("data-description");
        action = $(this).attr("data-action");
        let data = JSON.stringify({
          height:ht,
          width:wth,
          path:location,
          description:description,
          action:action
         })

        fetch("/api/store/visit",{
          method:"post",
          body:data,
          headers:{
            'X-CSRF-TOKEN': token,
            "Content-Type":"application/json"
          }
        })
        .then(res => res.json())
        .then( res => {
           //console.log("&#1F60F	I see you peeking")
        })
        .catch(err => console.log(err))
      })


     $.ajax(
           {url:"/api/store/visit",
            method:"post",
            headers: {
            'X-CSRF-TOKEN': token
            },
            data:{
              height:ht,
              width:wth,
              path:location,
              description:description,
              action:action
             },
            success:function(data){
           console.log(data);
            },
            error:function(err,msg){
              console.log(err);
            }
           });



});
