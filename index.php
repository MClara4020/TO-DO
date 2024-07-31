<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="src/styles/style.css">
    <title>To-do list</title>
</head>
<body>
    <div id="to_do">
        <h1> Coisas pra fazer</h1>

        <form action=" " class="to-do-form">
            <input type="text" name="description" placeholder="escreva sua tarefa aqui" required>
            <button type="submit" class="form-button">
                <i class="fa-solid fa-plus"></i>
            </button>
        </form>
    
        <div id="tasks">
            <?php
            foreach($tasks as $task):        
            ?>
            <div class="tasks">
                <input type="checkbox"
                 name="progress" 
                 class="progress <?= $task['completed'] ? 'done' : ''?>" 
                 data-task-id="<?= $task['id']?>"
                 <?= $task['completed'] ? 'checked' : '' ?> >

                <p class="tasks-description">
                    Tema de casa
                </p>

                <div class="task-actions">
                    <a href="" class="action-button edit-button">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a href="" class="action-button delete-button">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>
                </div>

                <form action="actions/update.php" method="post" class="to-do-form edit-task hidden">
                    <input type="text" class="hidden" name="id" value="<?= $task['id']?>">
                    <input type="text" name="description" placeholder="edite sua tarefa aqui" value="<?= $task['description']?>" >
                    <button type="submit" class="form-button confirm-button">
                        <i class="fa-solid fa-check"></i>
                    </button>
                </form>
            </div>
            <?php
            endforeach
            ?>
        </div>
    </div>

<script src="src/javascript/script.js"> </script>

</body>
</html>