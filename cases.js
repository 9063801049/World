function selectCountry()
{
var x=document.getElementById("case").value;
$.ajax({
        url:"showCountry.php",
        method:"POST",
        data:{
                id : x
        },
        success:function(data)
        {
                $("#ans").html(data);
        
        }
        
})


}
