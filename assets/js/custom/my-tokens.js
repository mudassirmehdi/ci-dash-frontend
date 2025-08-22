// Unified radio button group logic for my-tokens.php
$(document).ready(function() {
    // When a radio button is changed, filter the currently active tab's DataTable
    $('input[name="radio-token-view"]').on('change', function() {
        var selectedView = $(this).attr('id').replace('token-view-', '');
        var activeTab = $('.tab-pane.active').attr('id');
        var tableId = '';
        switch(activeTab) {
            case 'income6': tableId = '#datatable-income6'; break;
            case 'income22': tableId = '#datatable-income22'; break;
            case 'income53': tableId = '#datatable-income53'; break;
            case 'income110': tableId = '#datatable-income110'; break;
            case 'income525': tableId = '#datatable-income525'; break;
            case 'income1050': tableId = '#datatable-income1050'; break;
        }
        if(tableId) {
            // Example: filter by token status column (adjust index as needed)
            var table = $(tableId).DataTable();
            if(selectedView === 'all') {
                table.column(5).search('').draw();
            } else if(selectedView === 'assigned') {
                table.column(5).search('Assigned').draw();
            } else if(selectedView === 'used') {
                table.column(5).search('Used').draw();
            } else if(selectedView === 'unused') {
                table.column(5).search('Unused').draw();
            }
        }
    });

    // When tab is changed, reset radio to 'All Tokens'
    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('#token-view-all').prop('checked', true).trigger('change');
    });
});



$(document).ready(function() {
                                                // Helper to get active table
                                                function getActiveTable() {
                                                    var activeTab = $('.tab-pane.active').attr('id');
                                                    switch(activeTab) {
                                                        case 'income6': return $('#datatable-income6').DataTable();
                                                        case 'income22': return $('#datatable-income22').DataTable();
                                                        case 'income53': return $('#datatable-income53').DataTable();
                                                        case 'income110': return $('#datatable-income110').DataTable();
                                                        case 'income525': return $('#datatable-income525').DataTable();
                                                        case 'income1050': return $('#datatable-income1050').DataTable();
                                                    }
                                                    return null;
                                                }

                                                // Length change
                                                $('select[name="datatable_length"]').on('change', function() {
                                                    var table = getActiveTable();
                                                    if(table) {
                                                        table.page.len($(this).val()).draw();
                                                    }
                                                });

                                                // Search
                                                $('input[type="search"][aria-controls="datatable"]').on('keyup change', function() {
                                                    var table = getActiveTable();
                                                    if(table) {
                                                        table.search($(this).val()).draw();
                                                    }
                                                });

                                                // Tab change: reset controls
                                                $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
                                                    $('select[name="datatable_length"]').val('10');
                                                    $('input[type="search"][aria-controls="datatable"]').val('');
                                                    var table = getActiveTable();
                                                    if(table) {
                                                        table.page.len(10).search('').draw();
                                                    }
                                                });
                                            });




                                             document.addEventListener('DOMContentLoaded', function() {
                                        $('#datatable-income6').DataTable();
                                        $('#datatable-income22').DataTable();
                                        $('#datatable-income53').DataTable();
                                        $('#datatable-income110').DataTable();
                                        $('#datatable-income525').DataTable();
                                        $('#datatable-income1050').DataTable();
                                    });