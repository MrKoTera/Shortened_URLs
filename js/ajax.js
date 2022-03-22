$(document).ready(function() {
$('#sub_btn').click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "request.php",
        data: ({ short_url: $("#main_input").val() }),
        success: function(data) {
        console.log(data);
        $('#main_input').val( data ); 
    }
    });
 });
});
