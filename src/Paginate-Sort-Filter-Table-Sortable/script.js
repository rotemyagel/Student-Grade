(function($){

    var columns = {
        'fullName': 'Full Name',
        'id': 'ID',
        'exam': 'Exam',
        'grade': 'Grade'
    }
    
    var tableData = [];
    $.ajax({
        type: "GET",
        url: './ajax.php?list-students=true',
        success: function (response) {
            tableData = response.data;
        },
        error: function (error) {
            console.log(error);
        },
        complete: function (completeResponse) {
            generateTable(tableData);
        }

    
    });

    function generateTable(data){
        $('#root').tableSortable({
            data: data,
            columns: columns,
            dateParsing: true,
            pagination: 5,
            showPaginationLabel: true,
            prevText: 'Prev',
            nextText: 'Next',
            searchField: $('#search')
        });
    }

})(jQuery)
