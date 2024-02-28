<?php
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <h4 class="alert alert-success"><?php echo $_SESSION['status']; ?></h4>
                        <?php
                        unset($_SESSION['status']);
                    };
                ?>
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Multiple Data Insert using PHP MySQL
                        <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">ADD</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">

                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Name</label>
                                            <input type="text" name="name[]" class="form-control" required placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Phone Number</label>
                                            <input type="text" name="phone[]" class="form-control" required placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="new-form"></div>


                            <button type="submit" name="save_multi_data" class="btn btn-primary">Save data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            $(document).on('click', '.add-more-form', function () {
                $('.new-form').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Name</label>\
                                            <input type="text" name="name[]" class="form-control" required placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Phone Number</label>\
                                            <input type="text" name="phone[]" class="form-control" required placeholder="Enter Phone Number">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });
        });
    </script>
  </body>
</html>