$(document).ready(function(){
    $('#service').change(function(){ 
        var id=$(this).val();
        $.ajax({
            url : "<?php echo site_url('viewonly/get_service_item');?>",
            method : "POST",
            data : {id: id},
            async : true,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value='+data[i].id_serviceitem+'>'+data[i].nama_serviceitem+'</option>';
                }
                $('#service_item').html(html);
            }
        });
        return false;
    });
    
    $("#add_service").click(function(){
        var service_id = $("select.service").children("option:selected").val();
        var service_name = $("select.service").children("option:selected").text();
        var serviceitem_id = $("select.service_item").children("option:selected").val();
        var serviceitem_name = $("select.service_item").children("option:selected").text();
        var qty = $("#quantity").val();
        
        $.ajax({
            url : "<?php echo site_url('viewonly/cart');?>",
            method : "POST",
            data : {
                    service_id: service_id,
                    service_name: service_name,
                    serviceitem_id: serviceitem_id,
                    serviceitem_name: serviceitem_name,
                    qty: qty
                    },
            async : true,
            dataType : 'json',
            success: function(data){
                location.reload(); 
            }
        });
        return false;
    });
});