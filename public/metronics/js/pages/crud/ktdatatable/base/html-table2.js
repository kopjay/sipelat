'use strict';
// Class definition

var KTDatatableHtmlTableDemo = function() {
  // Private functions

  // demo initializer
  var demo = function() {

    var datatable = $('#kt_datatable').KTDatatable({
      data: {
        saveState: {cookie: false},
      },
      search: {
        input: $('#kt_datatable_search_query'),
        key: 'generalSearch',
      },
      layout: {
        class: 'datatable-bordered',
      },
      columns: [
        {
          field: 'NIK/NIP',
          type: 'number',
          width: 120,
        },
        {
          field: 'No SOP',
          type: 'number',
          width: 50,
        },
        {
          field: 'Nama',
          type: 'number',
          width: 120,
        },
        {
          field: 'Jenis Kelamin',
          type: 'text',
        },
        {
          field: 'Usia',
          type: 'number',
          width: 30,
        },
        {
          field: 'Jenis Kelamin',
          type: 'number',
          width: 95,
        },
        {
          field: 'Alamat',
          type: 'text',
          width: 130,
        },
        {
          field: 'Tgl',
          type: 'text',
          width: 60,
        },
        {
          field: 'Anamnesa dan Pemeriksaan Fisik',
          type: 'text',
          width: 230,
        },
        {
          field: 'Tindakan dan Terapi',
          type: 'text',
          width: 150,
        },
        {
          field: 'Action',
          type: 'text',
          width: 130,
        },
        
      ],
    });

    $('#kt_datatable_search_status').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'Status');
    });

    $('#kt_datatable_search_type').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'Type');
    });

    $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

  };

  return {
    // Public functions
    init: function() {
      // init dmeo
      demo();
    },
  };
}();

jQuery(document).ready(function() {
  KTDatatableHtmlTableDemo.init();
});
