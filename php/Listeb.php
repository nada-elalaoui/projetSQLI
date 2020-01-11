<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="images/logo.png" />
  <title>Gestion stock</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js">

  </script>

</head>

<body>
  <table id="examplse1" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
    <thead>
      <tr>
        <th></th>

        <th>Nom Collab</th>
        <th>Prénom Collab</th>
        <th>Type de machine</th>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Numéro de série(Service TAG)</th>
        <th>ID inventaire</th>
        <th>Date de livraison</th>
        <th>Date de fin de garantie</th>
        <th>Date d'affectation</th>
        <th>CPU</th>
        <th>CPU</th>
        <th>RAM</th>
        <th>Type HHD</th>
        <th>Capacité HHD</th>
        <th>Taille de l'écran</th>
      </tr>
    </thead>
        <tr class="table-primary">'
        <td>Numero de serie de l\'écran < /td>
        <td>' + d.Datea + '</td>
        </tr>
        <tr class="table-warning">
        <td>Souris</td>
        <td>' + d.Souris + ' ans</td>
        </tr>' +
        <tr class="table-success">
        <td>Clavier</td>' +
        <td>' + d.Clavier + '</td>
        </tr>' +
        <tr class="table-danger">
        <td>Adaptateurs</td>
        <td>' + d.Adaptateurs + '</td>
        </tr>' +
        <tr class="table-warning">
        <td>Casque</td>' +
        <td>' + d.Casque + ' </td>
        </tr>' +
        <tr class="table-success">
        <td>Numero de serie du Casque</td>
        <td>' + d.NSC + '</td>
        </tr>
  </table>
</body>

<script type="text/javascript">
  $(document).ready(function() {

    function format(d) {
      return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;"  >' +
        '<tr class="table-primary">' +
        '<td>Numero de serie de l\'écran < /td>' +
        '<td>' + d.Datea + '</td>' +
        '</tr>' +
        '<tr class="table-warning">' +
        '<td>Souris</td>' +
        '<td>' + d.Souris + ' ans</td>' +
        '</tr>' +
        '<tr class="table-success">' +
        '<td>Clavier</td>' +
        '<td>' + d.Clavier + '</td>' +
        '</tr>' +
        '<tr class="table-danger">' +
        '<td>Adaptateurs</td>' +
        '<td>' + d.Adaptateurs + '</td>' +
        '</tr>' +
        '<tr class="table-warning">' +
        '<td>Casque</td>' +
        '<td>' + d.Casque + ' </td>' +
        '</tr>' +
        '<tr class="table-success">' +
        '<td>Numero de serie du Casque</td>' +
        '<td>' + d.NSC + '</td>' +
        '</tr>' +

        '</table>';
    }

    var table = $('#example1').DataTable({
      "responsive": true,
      "language": {
        "sEmptyTable": "Aucune donnée disponible dans le tableau",
        "sInfo": "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
        "sInfoEmpty": "Affichage de l'élément 0 à 0 sur 0 élément",
        "sInfoFiltered": "(filtré à partir de _MAX_ éléments au total)",
        "sInfoPostFix": "",
        "sInfoThousands": ",",
        "sLengthMenu": "Afficher _MENU_ éléments",
        "sLoadingRecords": "Chargement...",
        "sProcessing": "Traitement...",
        "sSearch": "Rechercher :",
        "sZeroRecords": "Aucun élément correspondant trouvé",
        "oPaginate": {
          "sFirst": "Premier",
          "sLast": "Dernier",
          "sNext": "Suivant",
          "sPrevious": "Précédent"
        },
        "oAria": {
          "sSortAscending": ": activer pour trier la colonne par ordre croissant",
          "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
        },
        "select": {
          "rows": {
            "_": "%d lignes sélectionnées",
            "0": "Aucune ligne sélectionnée",
            "1": "1 ligne sélectionnée"
          }
        }
      },
      "ajax": "php/SelectINF.php",
      "columns": [{
          "className": 'details-control',
          "orderable": false,
          "data": null,
          "defaultContent": ''
        },
        {
          "data": "Nom"
        },
        {
          "data": "Prenom"
        },
        {
          "data": "TyprM"
        },
        {
          "data": "Marque"
        },
        {
          "data": "Modele"
        },
        {
          "data": "NS"
        },
        {
          "data": "IDINV"
        },
        {
          "data": "Datel"
        },
        {
          "data": "Datef"
        },
        {
          "data": "Datea"
        },
        {
          "data": "CPU"
        },
        {
          "data": "RAM"
        },
        {
          "data": "TypeHHD"
        },
        {
          "data": "Capacite"
        },
        {
          "data": "Taille"
        },
      ],
      "columnDefs": [{
        "targets": [1],
        "visible": false,
        "searchable": false
      }],
      "order": [
        [1, 'asc']
      ],
      dom: 'Bfrtip',

    });
  });
</script>

</html>