var initDataTable = function(
    tableId,
    documentTitle = '',
    search = true,
    exportButtons = true
)
{
    table = $("#" + tableId+"-table").DataTable({
        "info": false,
        'order': [],
        'pageLength': 10,
    });

    if(search){
        $("#"+tableId+"-field-search").on('keyup', function () {
            table.search(this.value).draw();
        });
    }

    if(exportButtons){
        buttons = new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'copyHtml5',
                    title: documentTitle
                },
                {
                    extend: 'excelHtml5',
                    title: documentTitle
                },
                {
                    extend: 'csvHtml5',
                    title: documentTitle
                },
                {
                    extend: 'pdfHtml5',
                    title: documentTitle
                },
                {
                    extend: 'print',
                    title: documentTitle
                }
            ]
        }).container().appendTo($('#'+tableId+"-dt-buttons"));
        exportButtons = document.querySelectorAll('#'+tableId+"-export-menu [data-kt-export]");
        exportButtons.forEach(exportButton => {
            exportButton.addEventListener('click', e => {
                e.preventDefault();

                // Get clicked export value
                const exportValue = e.target.getAttribute('data-kt-export');
                const target = document.querySelector('.dt-buttons .buttons-' + exportValue);

                // Trigger click event on hidden datatable export buttons
                target.click();
            });
        });
    }
}