function listarPacientes() {       
    $.ajax({
        url : "pacientes/index",
        type : 'GET',
        dataType: 'html',
        success: function(data) {
            $('#conteudo').html(data);
           
        },
        error: function(error) {

        }
   })
}

function addPaciente() {
    $.ajax({
        url : "pacientes/add",
        type : 'GET',
        success: function(data) {
     
       $('#myModalPacienteAdd').modal('toggle');
       $('#myModalPacienteAddBody').html(data);
    
        },
        error: function(error) {
            console.log(error);
        }
   })
}

function editarPaciente(id) {
    $.ajax({
        url : "pacientes/edit/"+id,
        type : 'GET',
        success: function(data) {
            $('#myModalPacienteEdit').modal('toggle');
            $('#myModalPacienteEditBody').html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function salvarPaciente(id, form, modal) {
    var formData = $(`#${form}`).serialize(); 
    $.ajax({
        url: "pacientes/save/"+id,
        type: "POST",
        data: formData,
        success: function(response) {
            $(`#${modal}`).modal('toggle');
            listarPacientes();
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function deletarPaciente(id) {
    $.ajax({
        url: "pacientes/delete/" + id,
        type: 'DELETE',
       success: function(response) {
           console.log(response);
           listarPacientes();
       },
           error: function(error) {
               console.log(error);
           }
       });
}

function listarMedicos() {       
    $.ajax({
        url : "medicos/index",
        type : 'GET',
        dataType: 'html',
        success: function(data) {
            $('#conteudo').html(data);
           
        },
        error: function(error) {

        }
   })
}

function addMedico() {
    $.ajax({
        url : "medicos/add",
        type : 'GET',
        success: function(data) {
     
       $('#myModalMedicoAdd').modal('toggle');
       $('#myModalMedicoAddBody').html(data);
    
        },
        error: function(error) {
            console.log(error);
        }
   })
}

function salvarMedico(id, form, modal) {
    var formData = $(`#${form}`).serialize(); 
    $.ajax({
        url: "medicos/save/"+id,
        type: "POST",
        data: formData,
        success: function(response) {
            $(`#${modal}`).modal('toggle');
            listarMedicos();
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function editarMedico(id) {
    $.ajax({
        url : "medicos/edit/"+id,
        type : 'GET',
        success: function(data) {
            $('#myModalMedicoEdit').modal('toggle');
            $('#myModalMedicoEditBody').html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function deletarMedico(id) {
    $.ajax({
        url: "medicos/delete/" + id,
        type: 'DELETE',
       success: function(response) {
           console.log(response);
           listarMedicos();
       },
           error: function(error) {
               console.log(error);
           }
       });
}

function listarConsultas() {       
    $.ajax({
        url : "consultas/index",
        type : 'GET',
        dataType: 'html',
        success: function(data) {
            $('#conteudo').html(data);
           
        },
        error: function(error) {

        }
   })
}

function addConsulta() {
    $.ajax({
        url : "consultas/add",
        type : 'GET',
        success: function(data) {
     
       $('#myModalConsultaAdd').modal('toggle');
       $('#myModalConsultaAddBody').html(data);
    
        },
        error: function(error) {
            console.log(error);
        }
   })
}

function salvarConsulta(id, form, modal) {
    var formData = $(`#${form}`).serialize(); 
    $.ajax({
        url: "consultas/save/"+id,
        type: "POST",
        data: formData,
        success: function(response) {
            $(`#${modal}`).modal('toggle');
            listarConsultas();
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function editarConsulta(id) {
    $.ajax({
        url : "consultas/edit/"+id,
        type : 'GET',
        success: function(data) {
            $('#myModalConsultaEdit').modal('toggle');
            $('#myModalConsultaEditBody').html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
}

function deletarConsulta(id) {
    $.ajax({
        url: "consultas/delete/" + id,
        type: 'DELETE',
       success: function(response) {
           console.log(response);
           listarConsultas();
       },
           error: function(error) {
               console.log(error);
           }
       });
}

function listarInfo(id) {
    $.ajax({
        url : "consultas/listarInfo/"+id,
        type : 'GET',
        success: function(data) {
            $('#myModalInfo').modal('toggle');
            $('#myModalInfoBody').html(data);
        },
        error: function(error) {
            console.log(error);
        }
    });
}

