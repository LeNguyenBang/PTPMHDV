$(document).ready(function () {
    $(".tinh").change(function () {
        var id=$(".tinh").val();
        $.post ("huyen.php",{id: id},function (data) {
            $(".huyen").html(data);
            
        })
    })
    
})
$(document).ready(function () {
    $(".huyen").change(function () {
        var id1=$(".huyen").val();
        $.post ("xa.php",{id1: id1},function (data) {
            $(".xa").html(data);

        })
    })

})