$(document).ready(function(){
    $('.edit-button').on('click', function() {
        var $task = $(this).clasest('.task');
        $task.find('.progress').addClass('hidden');
        $task.find('task-description').addClass('hidden');
        $task.find('.task-actions').addClass('hidden');
        $task.find('.edit-task').removeClass('hidden');
   });

   $('.progress').an('click', function(){
    if($(this).is(':checked')) {
        $(this).addClass('done');
    } else {
        $(this).removeClass('done');
    }
   });

   $('.progress').on('change', function (){
    if ($(this).is(':checked')) {
        $(this).addClass('done');
    }  else{
        $(this).addClass('done');
    }
   });

   $('.progress').on('change', function(){
    const id = $(this).data('task-id');
    const completd = $(this).is(':checked') ? 'true' : 'false';
    $.ajax({
        url: '../../actions/update-progress.php',
        method: 'POST',
        data:{id: id, completd: completd},
        dataType: 'json',
        success: function(response){
            if(response.success) {

            } else {
                alert('Erro ao editar a tarefa');
            }
        },
        error: function() {
            alert('Ocorreu um erro');
        }
    });
   })

});