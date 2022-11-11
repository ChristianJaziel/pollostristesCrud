$('#formloginreg').submit(function(e){
    e.preventDefault();
    var user=$.trim($("#usuarior").val());
    var passw=$.trim($("#passwordr").val());
    var passwc=$.trim($("#passwordrcon").val());
    console.log(user);
    console.log(passw);
    if(user.length==""||passw.length==""||passwc.length==""){
        Swal.fire({
            icon: "error",
            title:"Debes llenar todos los campos",
        });
        return false;
    }else{
        if(passw===passwc){
            Swal.fire({
                icon: "success",
                title:"Las contraseñas son iguales",
            });
        }else{
            Swal.fire({
                icon: "error",
                title:"Las contraseñas no coinciden",
            });
            return false;
        }
        }
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
                            window.location.href="login.php"
                            }
                        }                   
                    );
            }   
        });
    
});
