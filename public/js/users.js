$(function () {
   listar();
   $('#enviar_form').click(function (event) {
       event.preventDefault();
       var infoForm = {
                      "_token" : $('meta[name="csrf-token"]').attr('content'),
                      "name" : $('#name').val(),
                      "email" : $('#email').val(),
                      "password" : $('#password').val(),
                    };
       var url = $('#form_add_user').attr('action');
       addUser(url,infoForm);
       $('#exampleModalCenter').modal('hide');
        $('#name').val('');
        $('#email').val('');
         $('#password').val('');
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
        updateUser(url,infoForm);
        $('#editModal').modal('hide');
    });

});

function listar() {
    $.get('/list/users')
        .done(function (data) {
            $('#tabla_usuarios').empty();
            $('#tabla_usuarios').append('<table class="table table-striped">\n' +
                '  <thead>\n' +
                '    <tr>\n' +
                '      <th scope="col">Nombre</th>\n' +
                '      <th scope="col">Email</th>\n' +
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
            listar();
            console.log(data);
        })
        .fail(function (data) {
            console.log(data);
        });
}

function updateUser(url,infoForm) {
    $.post(url,infoForm)
        .done(function(data){
            listar();
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
            console.log(data)
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
