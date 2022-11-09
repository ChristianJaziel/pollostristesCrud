$('#formloginreg').submit(function(e){
    e.preventDefault();
    var user=$.trim($("#usuarior").val());
    var passw=$.trim($("#passwordr").val());
    console.log(user);
    console.log(passw);
    if(user.length==""||passw.length==""){
        Swal.fire({
            icon: "error",
            title:"Debe ingresar un usuario y password",
        });
        return false;
    }else{
        $.ajax({
            url:"bd/registrar.php",
            type:"POST",
            datatype: "json",
            data: {user:user,passw:passw},
            success:function(data){
                    Swal.fire({
                        icon:'success',
                        title:'Registro exitoso',
                        confirmButtonColor:'#3085d6',
                        confirmButtonText:'Ingresar',
                    }).then((result)=>{
                        if(result.value){
                            window.location.href="index.php"
                            }
                        }                   
                    );
            }   
        });
    }
});