<div id="modalSuppr" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation de suppression</h5>
      </div>
      <div class="modal-body">
        <p>Voulez vous supprimer cette nationalité</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non, Ne Pas Supprimer</button>
        <a href="" class="btn btn-primary" id="btnSuppr">Oui, Supprimer</a>
      </div>
    </div>
  </div>
 </div>
<footer class="container">
  <p>&copy; NotApple 2020-2020</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/28d30dfe01.js" crossorigin="anonymous"></script>
<script type="text/javascript">

$("a[data-suppr]").click(function(){
  var lien = $(this).attr("data-suppr");//on récupère le lien du bouton "poubelle"
  var message = $(this).attr("data-message");
  $("#btnSuppr").attr("href",lien);//on écrit ce lien sur le bouton "supprimer" de la modale
  $(".modal-body").text(message);
});

</script>
</body>
</html>