slider();

function slider() {
    
    $.ajax({
        url: "getInfoAboutAllPictureToAjax",
        method: "POST",
        dataTypa: "JSON",
        success: function(data)
                {  
                    var data = jQuery.parseJSON(data);
                    var dataLength = data.length;
                    
                       var i=0; 
                        $('.slider').html("<img src=/public/uploads/"+data[i]['name']+">");

                        $('.plus').click(function() {
                                if(i !==dataLength-1){
                                    i++;
                                }else{
                                    i=0;
                                }
                            $('.slider').html("<img src=/public/uploads/"+data[i]['name']+">");
                        });
                        
                        
                        $('.minus').click(function() {
                                if(i !==0){
                                   i--;
                                }else{
                                   i = dataLength-1;
                                }
                            $('.slider').html("<img src=/public/uploads/"+data[i]['name']+">");
                        });           
                },
        error : function(){
                    console.log("Error");
                }          
    });
};



