$(document).ready(function(){
    
    // console.log('ahihi');
    $("#sortOptions").on("change", function(){
        var val = $(this).val();
        switch(val){
            case 'order':  $("#sortOrder").show(); $("#sortKpi").hide();$("#sortTopOrder").hide();$('#sortTopCus').hide();
                break;
            case 'kpi':  $("#sortTopOrder").hide(); $("#sortKpi").show();$("#sortTopSale").hide(); $("#sortOrder").hide()
                break;
            case 'toporder':  $("#sortTopOrder").hide(); $("#sortKpi").hide();$("#sortTopSale").show();
                break;
            case 'topcus': $("#sortTopOrder").hide(); $("#sortKpi").hide();$("#sortTopSale").hide();$('#sortTopCus').show();
                break;
        }
        // console.log(val);
    })
   
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
    tinymce.init({
        selector: '#tinymce',
        height: 500,
        plugins: ["advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"],
        toolbar: 'bold italic underline | image',
        branding: false,
        file_picker_callback: filemanager.tinyMceCallback,
    });   
    tinymce.init({
        selector: '#tinymce1',
        height: 300,
        plugins:  ["advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"],
        toolbar: 'bold italic underline | image',
        branding: false,
        file_picker_callback: filemanager.tinyMceCallback,
    });   
    tinymce.init({
            selector: '#tinymce_sort',
            height: 300,
            plugins:  ["advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"],
            toolbar: 'bold italic underline | image',
            branding: false,
            file_picker_callback: filemanager.tinyMceCallback,
        }); 



});