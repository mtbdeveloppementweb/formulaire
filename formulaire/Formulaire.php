<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
  
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color:#000;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #200ae6;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<h2>Formulaire d'inscription</h2>

<div class="container">
<form method="post" action="traitement.php">  

  <div class="row">
    <div class="col-25">
      <label for="PRENOM">Prénom</label>
    </div>
    <div class="col-75">
      <input type="text" id="#" name="PRENOM" placeholder="Votre prénom...">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="NOM">Nom</label>
    </div>
    <div class="col-75">
      <input type="text" id="#" name="NOM" placeholder="Votre nom de famille...">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="DATE_DE_NAISSANCE">Date de Naissance</label>
    </div>
    <div class="col-75">
      <input type="date" id="#" name="DATE_DE_NAISSANCE" placeholder="Votre date de naissance...">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="LIEU_DE_NAISSANCE">Lieu de Naissance</label>
    </div>
    <div class="col-75">
      <input type="text" id="#" name="LIEU_DE_NAISSANCE" placeholder="Votre lieu de naissance...">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="EMAILl">Email</label>
    </div>
    <div class="col-75">
      <input type="email" id="#" name="EMAIL" placeholder="exempl@gmail.com...">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="FORMATION">Formation</label>
    </div>
    <div class="col-75">
      <select id="#" name="FORMATION">
        <option value="Developpement_web">Développement web</option>
        <option value="Infographie">Infographie</option>
        <option value="Transformation">Transformation</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Soumettre">
  </div>
  </form>
</div>
</body>
</html>


