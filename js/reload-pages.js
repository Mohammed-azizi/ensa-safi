

$(document).on('click', '.filliers' , function () {

           
    var  index1=$(this).data('index1');


        $.ajax({
            url: "filier-result.php",
            method: "GET",     
            data:{index1:index1},                  
            success: function (data) {  
                history.pushState(null,null,index1);
                $('#main-content').html(data);   
            }
            
        });

        
    

});

