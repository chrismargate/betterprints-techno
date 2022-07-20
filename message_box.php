<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- <link href="assets/css/message_box.css" rel="stylesheet"> -->
</head>
<body>

    <!-- Button trigger modal -->
    <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <script>
    window.onload = function () {
        showModal();
    };

    function showModal() {
        $('#reg-modal').modal('show');
    }
    function showUsernameToast() {
        $('#username-error-toast').toast('show');
    }
    function showIncorrectToast() {
        $('#incorrect-error-toast').toast('show');
    }
    </script>
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="toast" id="username-error-toast" role="alert" aria-atomic="true" data-autohide="false" style="position: fixed; left: 50%; transform: translate(-50%, 0px); z-index: 9999;">
            <div class="toast-header">
                <strong class="mr-auto text-primary">Login Error</strong>
            </div>
            <div class="toast-body">
                Please enter a valid username.
            </div>
        </div>
        <div class="toast" id="incorrect-error-toast" role="alert" aria-atomic="true" data-autohide="false" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <strong class="mr-auto text-primary">Login Error</strong>
            </div>
            <div class="toast-body">
                Your password was incorrect. Please try again.
            </div>
        </div>
    </div>
    
    
    <div class="modal fade" id="reg-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log-in successful</h5>
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="modal-body">
                You have logged in successfully!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Proceed</button>
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>




    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script> -->
</body>
</html>