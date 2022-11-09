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
        if(passw===passwc){
            echo("Las contraseñas son iguales");
        }else{
            echo("Las contraseñas no coinciden")
            return false;
        }
       
       
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
                            window.location.href="login.php"
                            }
                        }                   
                    );
            }   
        });
    }
});