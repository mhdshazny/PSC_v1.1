
$(document).ready(function(){
    $('#picture').click(function(){
        var image_name = $('#picture').val();
        if(image_name == '')
        {
            alert("Please Select Image");
            return false;
        }
        else
        {
            var extension = $('#picture').val().split('.').pop().toLowerCase();
            if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
            {
                alert('Invalid Image File');
                $('#picture').val('');
                return false;
            }
        }
    });
});