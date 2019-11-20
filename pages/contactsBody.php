<div class="page">
  <!--Contact Us-->
  <section class="section-sm bg-gray-100">
    <div class="container">
      <!--RD Mailform-->
      <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
        <h2>Déjanos tu <span class="font-weight-light">mensaje</span></h2>
        <div class="form-row row-10 offset-xs">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="rd-label rd-label-lg" for="contact-name">Nombre:</label>
              <input class="form-control form-control-lg" id="contact-name" type="text" name="name" data-constraints="@Required">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="rd-label rd-label-lg" for="contact-phone">Teléfono:</label>
              <input class="form-control form-control-lg" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="rd-label rd-label-lg" for="contact-email">Correo Electrónico:</label>
              <input class="form-control form-control-lg" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <textarea class="form-control form-control-lg" id="contact-message" name="message" data-constraints="@Required"></textarea>
              <label class="rd-label rd-label-lg" for="contact-message">Mensaje:</label>
            </div>
          </div>
        </div>
        <div class="offset-sm">
          <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </section>
</div>