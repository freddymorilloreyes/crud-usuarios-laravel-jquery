$(document).ready(function() {
    $(".country_id").change(function(){
        var country_id =$(this).val();
        //var country_id =$(".country_id").val();
        console.log();
        $(".department_id").empty();
        $.get('/department/'+country_id)
            .done(function(result) {
                $(".department_id").append('<option value="">seleccione</option>');
                $.each(result.departments, function (key , value) {
                    $(".department_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                });
                $(".municipality_id").empty();
            })
            .fail(function(result) {
                console.log(result);
            });
    });
    $(".department_id").change(function(){
        var department_id =$(this).val();
        //var department_id =$(".department_id").val();
        $(".municipality_id").empty();
        $.get('/municipality/'+department_id)
            .done(function(result) {
                $(".municipality_id").append('<option value="">seleccione</option>');
                $.each(result.municipalities, function (key , value) {
                    $(".municipality_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                });
            })
            .fail(function(result) {
                console.log(result);
            });
    });
});
