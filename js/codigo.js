$('#formlogin').submit(function(e){
    e.preventDefault();
    var usuario=$.trim($("#usuario").val());
    var password=$.trim($("#password").val());
    console.log(usuario);
    console.log(password);
    if(usuario.length==""||password.length==""){
        Swal.fire({
            icon: "error",
            title:"Debe ingresar un usuario y password",
        });
        return false;
    }else{
        $.ajax({
            url:"bd/login.php",
            type:"POST",
            datatype: "json",
            data: {usuario:usuario,password:password},
            success:function(data){
                if(data=="null"){
                    Swal.fire({
                        icon:'error',
                        title:'credenciales incorrectas'
                    });
                }else{
                    Swal.fire({
                        icon:'success',
                        title:'La conexi�n es exitosa',
                        confirmButtonColor:'#3085d6',
                        confirmButtonText:'Ingresar',
                    }).then((result)=>{
                        if(result.value){
                            window.location.href="index.html"
                            }
                        }                   
                    );
                }
            }
            
        });
    }
});