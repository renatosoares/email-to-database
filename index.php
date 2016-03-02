<?php require 'header.php'; ?>

  <main class="container">
    <article class="row">
      <section class="col-md-3">
        &nbsp;
      </section>
      <section class="col-md-6">
        <form class="form-horizontal" role="form" action="send-database.php" method="post">
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Nome:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="Nome" name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="phone">Telefone:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="phone" placeholder="Telefone" name="phone">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="specify">O que você precisa:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="specify" placeholder="O que você precisa" name="specify">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="city">Cidade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="city" placeholder="Cidade" name="city">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="uf">UF:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="uf" placeholder="UF" name="uf">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="message">Mensagem:</label>
            <div class="col-sm-10">
               <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
      </section>
      <section class="col-md-3">
        &nbsp;
      </section>
    </article>
  </main>
<?php require 'footer.php'; ?>
