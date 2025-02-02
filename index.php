<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <title>Form consulta </title>
</head>

<body>
  <div class="row w100">
    <div class="col-sm-12 modal-css">
      <div class="card">
        <div class="card-body">
          <h1 class="text-center mb-4">Agendamento de Consulta ou vacina</h1>
          <form action="actions/inserir.php" method="POST">
            <div class="mb-3">
              <label for="nome" class="form-label">Nome completo:</label>
              <input type="text" class="form-control" name="nome" id="nome" required>
            </div>
            <h2 class="mt-3">Dados do Animal</h2>
            <div class="mb-3">
              <label for="nomePet" class="form-label">Nome do pet:</label>
              <input type="text" class="form-control" name="nomePet" id="nomePet" required>
            </div>
            <label for="especie" class="form-label">Espécie:</label>
            <select class="form-select" name="especie" id="especie">
              <option value="cao">Cão</option>
              <option value="gato">Gato</option>
              <option value="outro">Outro</option>
            </select>
            <label for="agendar" name="agendar" class="form-label mt-3">Agendar:</label>
            <select class="form-select" name="agendar" id="agendar">
              <option value="consulta" name="consulta" class="consulta">Consulta</option>
              <option value="vacina" name="vacina" class="vacina">Vacina</option>

            </select>
            <div class="mb-3 mt-3"> <label for="motivo" class="form-label motivo">Motivo da consulta:</label>
              <textarea class="form-control" name="motivo" id="motivo" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="data" class="form-label">Data da consulta:</label>
              <input type="date" class="form-control" name="data" id="data" required>
            </div>
            <div class="mb-3">
              <label for="hora" class="form-label">Hora da consulta:</label>
              <input type="time" class="form-control" name="horario" id="hora" required>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Agendar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="module" src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>