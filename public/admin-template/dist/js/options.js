$(document).ready(function(){
    
    console.log("ahinnnnhi")
   
    $("#percent_sale").keyup(function(){
        // alert( "Handler for .keyup() called." );
          var percent_sale =  $("#percent_sale").val();
          var price = $("#price").val();
          if( percent_sale== 0){
             $("#sale_price").val(0);
          }else{
             $("#sale_price").val(price-(percent_sale*price)/100);}
        //   console.log(text);

    });
    $("#price").keyup(function(){
          var percent_sale =  $("#percent_sale").val();
          var price = $("#price").val();
          $("#sale_price").val(price-(percent_sale*price)/100);
        

    });
      




});