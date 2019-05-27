$(function () {
   listar();
   $('#enviar_form').click(function (event) {
       event.preventDefault();
       var infoForm = {
                      "_token" : $('meta[name="csrf-token"]').attr('content'),
                      "name" : $('#name').val(),
                      "email" : $('#email').val(),
                      "municipality_id" : $('#municipality_id').val(),
                      "password" : $('#password').val(),
                    };
       var url = $('#form_add_user').attr('action');
       if(!validarInfoForm(infoForm)){
           return;
       }
       addUser(url,infoForm);
   });

    $('#enviar_form_update').click(function (event) {
        event.preventDefault();
        var infoForm = {
            "_token" : $('meta[name="csrf-token"]').attr('content'),
            "name" : $('#name_update').val(),
            "email" : $('#email_update').val(),
            "password" : $('#password_update').val(),
        };
        var url = $('#form_update_user').attr('action');
        if(!validarInfoForm(infoForm)){
            return;
        }
        updateUser(url,infoForm);

    });

});

function listar() {
    $.get('/list/users')
        .done(function (data) {
            console.log(data);
            $('#tabla_usuarios').empty();
            $('#tabla_usuarios').append('<table class="table table-striped">\n' +
                '  <thead>\n' +
                '    <tr>\n' +
                '      <th scope="col">Nombre</th>\n' +
                '      <th scope="col">Email</th>\n' +
                '      <th scope="col">Dirección</th>\n' +
                '      <th scope="col">Creado</th>\n' +
                '      <th scope="col">Acciones</th>\n' +
                '    </tr>\n' +
                '  </thead>\n' +
                '  <tbody>\n' +
                crearFilasTablaUsers(data.users)+
                '  </tbody>\n' +
                '</table>')
        });
}

function crearFilasTablaUsers(infoUsers){
    var filas ='';
    $.each(infoUsers,function (index,value) {
        filas +='    <tr>\n' +
        '      <td>'+value.name+'</td>\n' +
        '      <td>'+value.email+'</td>\n' +
        '      <td>'+value.municipality.department.country.name+'-'+value.municipality.department.name+'-'+value.municipality.name+'</td>\n' +
        '      <td>'+value.created_at+'</td>\n' +
        '      <th scope="row">\n' +
            '      <button class="btn btn-warning" onclick="showModalEdit('+value.id+')">editar</button>\n' +
            '      <button class="btn btn-danger" onclick="deleteUser('+value.id+')">eliminar</button>\n' +
        '      </th>\n' +
        '    </tr>\n';
    });
    return filas;
}

function addUser(url,infoForm) {
    $.post(url,infoForm)
        .done(function(data){
            console.log(data);
            if(data.email_tomado){
                $('.mensaje_correo').empty().append('Este Correo ya fue tomado');
            }else{
                listar();
                $('#exampleModalCenter').modal('hide');
                $('#name').val('');
                $('#email').val('');
                $('#password').val('');
            }
        })
        .fail(function (data) {
            console.log(data);
        });
}

function updateUser(url,infoForm) {
    $.post(url,infoForm)
        .done(function(data){
            console.log(data);
            if(data.email_tomado){
                $('.mensaje_correo').empty().append('Este Correo ya fue tomado');
            }else{
                listar();
                $('#editModal').modal('hide');
            }
        })
        .fail(function (data) {
            console.log(data);
        });
}

function showModalEdit(id){
    $.get('/show/'+id+'/users')
        .done(function (data) {
            $('#name_update').val(data.infoUser.name);
            $('#email_update').val(data.infoUser.email);
            $('#form_update_user').attr('action','/update/'+id+'/users');
            $('#editModal').modal('show');
        })
}

function deleteUser(id) {
    if (!confirm('¿Seguro de eliminar este usuario?')){
        alert('ufff se salvó!');return;
    }
    $.get('/delete/'+id+'/users')
        .done(function (data) {
        listar();
        alert('usuario eliminado con éxito!');
    }).fail(function (data) {
        alert('algo salió mal. No se pudo eliminar!');
    });

}

function validarInfoForm(info) {
    if(!validateName(info.name)){
        $('.mensaje_nombre').empty().append('se Requiere un nombre de usuario');
        return false;
    }$('.mensaje_nombre').empty();
    if(!isEmail(info.email)){
        $('.mensaje_correo').empty().append('Correo Inválido');
        return false;
    }
    if(!validatePass(info.password)){
        $('.mensaje_password').empty().append('la clave debe contener por lo menos 8 caracteres');
        return false;
    }$('.mensaje_password').empty();
    return true;
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function validateName(name) {
    if(!name.length>0){
        return false;
    }
    return true;
}

function validatePass(pass) {
    if(pass.length<8){
        return false;
    }
    return true;
}
