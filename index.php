    <?php

    $title="Students Grade";
    $body_class = "grade";

    $assets = array(
       'css' => array(
           '<link rel="stylesheet" href="src/Paginate-Sort-Filter-Table-Sortable/styles.css">'
       ),
       'js' => array(
        '<script src="src/Paginate-Sort-Filter-Table-Sortable/table-sortable.js"></script>',
        '<script src="src/Paginate-Sort-Filter-Table-Sortable/script.js"></script>'
       ),
    );

    ?>

    <?php require_once 'include/header.php'; ?>

    <div class="container my-5">
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="search" id="search" class="form-control" placeholder="Search">
            </div>
        </div>
        <div id="root" class="table-responsive-md"></div>
    </div>


    <?php require_once 'include/footer.php'; ?>