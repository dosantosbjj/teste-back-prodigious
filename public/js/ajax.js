
$("#form-search").on("submit", function (e) {
    e.preventDefault();
    var dadosForm = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "/users/search",
        data: dadosForm,
        success: function( data )
        {
            var responseHTML = '';
            if(data.length > 0){
                for(var i = 0; i < data.length; i++){
                    responseHTML += '<div class="card bg-light mb-3" style="max-width: 650px;">';
                    responseHTML += '<div class="card-header"> Usuário Cód. <a href="http://localhost:8000/users/'+data[i].id+'/edit">' +  data[i].id + '</a></div>';
                    responseHTML += '<div class="card-body">';
                        responseHTML += '<h5 class="card-title"> <b>Nome: </b>'+  data[i].nome + '</h5>';
                        responseHTML += '<p class="card-text"><b>Descrição: </b> '+ data[i].descricao +'</p>';
                        responseHTML += '<h4 style="text-align:center"><a href="http://localhost:8000/users/'+data[i].id+'/edit">Ver detalhes do usuário<i class="fas fa-arrow-right icone"></i></a>';
                    responseHTML += '</div>';
                responseHTML += '</div>';
                }

            }else{
                responseHTML = '<strong>Não foi possível encontrar o usuário"'+$("#input").val()+'"</strong>';
            }
            $("#search-content").html(responseHTML);
        }
    });
});
