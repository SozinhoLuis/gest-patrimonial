$(document).ready(function () {

    var ativosTable = $("#ativosTable").DataTable({
        serverSide: false,
        scrollX: true,
        ajax: {
            url: "/ativos_data",
            method: "get",
        },
        language: {
            url: "/js/pt_br.json",
        },
        columnDefs: [
            {
                targets: [4],
                orderable: false,
            },
            {
                targets: [1, 2 ],
                searchable: false,
            },

            {
                render: function (data, type, row) {
                    return [
                        '<div class="btn-group" role="group">' +
                            '<a href="' +
                            data +
                            '"  class="btn btn-outline-primary btn-fw waves-effect" data-toggle="tooltip" id="edit" title="Editar">',
                        '<i class="far fa-edit"></i>',
                        "</a>",
                        '<a href="' +
                            data +
                            '" class="btn btn-outline-danger btn-fw waves-effect" id="user_remove" data-toggle="tooltip" title="Apagar">',
                        '<i class="fas fa-trash-alt"></i>',
                        "</a>",
                        "</div>",
                    ].join("");
                },
                className: "text-center",
                targets: 4,
            },
        ],
        order: [
            // Ordenação personalizada
            [0, "asc"],
        ],
    });
});
