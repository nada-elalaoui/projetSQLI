<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="images/logo.png"/>
  <title>Gestion stock</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Ajouter un nouveau ordinateur</h2>
  <form method="POST" action="php/AjouterINF.php" class="was-validated">
    <div class="form-group">
      <div class='row'>
      <div class='col-lg-4'>
      <label>Nom Collab:</label>
      <input type="text" class="form-control" id="nom" placeholder="Enter le nom" name="nom" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Prénom Collab:</label>
        <input type="text" class="form-control" id="prenom" placeholder="Enter le prénom" name="prenom" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Type de machine:</label>
        <input type="text" class="form-control" id="type" placeholder="Enter le type de machine" name="type" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    </div>
    </div>
    <div class="form-group">
      <div class='row'>
      <div class='col-lg-4'>
      <label>Marque:</label>
      <input type="text" class="form-control" id="marque" placeholder="Enter la marque" name="marque" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Modèle:</label>
        <input type="text" class="form-control" id="model" placeholder="Enter le modèle" name="model" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Numéro de série (Service TAG):</label>
        <input type="number" class="form-control" id="ST" placeholder="Enter le numéro de série" name="ST" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    </div>
    </div>
    <div class="form-group">
      <div class='row'>
      <div class='col-lg-4'>
      <label>ID inventaire:</label>
      <input type="text" class="form-control" id="id" placeholder="Enter ID inventaire" name="id" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Date de livraison:</label>
        <input type="date" class="form-control" id="datel" placeholder="Enter la date de livraison" name="datel" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Date de fin de garantie:</label>
        <input type="date" class="form-control" id="datef" placeholder="Enter date de fin de garantie" name="datef" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    </div>
    </div>
    <div class="form-group">
      <div class='row'>
      <div class='col-lg-4'>
      <label>Date d'affectation:</label>
      <input type="date" class="form-control" id="datea" placeholder="Enter la date d'affectation" name="datea" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>CPU:</label>
        <input type="text" class="form-control" id="cpu" placeholder="Enter CPU" name="cpu" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>RAM:</label>
        <input type="text" class="form-control" id="ram" placeholder="Enter RAM" name="ram" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    </div>
    </div>
    <div class="form-group">
      <div class='row'>
      <div class='col-lg-4'>
      <label>Type HDD:</label>
      <input type="text" class="form-control" id="typeh" placeholder="Enter le type HDD" name="typeh" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Capacité HDD:</label>
        <input type="text" class="form-control" id="capacite" placeholder="Enter capacité HDD" name="capacite" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Taille de l'Ecran:</label>
        <input type="number" class="form-control" id="taille" placeholder="Enter la taille de l'Ecran" name="taille" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    </div>
    </div>
    <div class="form-group">
      <div class='row'>
      <div class='col-lg-4'>
      <label>Numéro de série de l'écran:</label>
      <input type="text" class="form-control" id="NS" placeholder="Enter le numéro de série de l'écran" name="NSE" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Souris:</label>
        <input type="text" class="form-control" id="souris" placeholder="Enter la souris" name="souris" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Clavier:</label>
        <input type="text" class="form-control" id="clavier" placeholder="Enter le clavier" name="clavier" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    </div>
    </div>
    <div class="form-group">
      <div class='row'>
      <div class='col-lg-4'>
      <label>Adaptateurs:</label>
      <input type="text" class="form-control" id="adaptateur" placeholder="Enter l'adaptateur" name="adaptateur" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Casque:</label>
        <input type="text" class="form-control" id="casque" placeholder="Enter le casque" name="casque" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label>Numéro de série du Casque:</label>
        <input type="text" class="form-control" id="casqueN" placeholder="Enter le numéro de série du Casque" name="casqueN" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
    </div>
    </div>
    </div>

    <button type="submit" class="btn btn-primary" name="add" style="margin-bottom:20px;margin-left:500px;size:40px;">Submit</button>
  </form>
</div>

</body>
</html>
