<div class="card-body col-md-5">
    <h5 class="card-title">Ajouter Régime</h5>

    <!-- Vertical Form -->
    <form class="row g-3" method="post" action="<?php echo base_url('index.php/RegimeC/insert')?>">
        


        <div class="col-md-12">
            <label for="inputNanme4" class="form-label">Numéro Régime</label>
            <input type="number" class="form-control" id="inputNanme4" name="num">
        </div>
      
        <div class="col-12">
            <label for="inputPassword4" class="form-label">Durée</label>
            <input type="number" class="form-control" id="inputPassword4" name="duree">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">%Viande</label>
            <input type="number" class="form-control" id="inputAddress" name="pourcentageV">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">%Volaille</label>
            <input type="number" class="form-control" id="inputAddress"  name="pourcentageL">
        </div>    
        <div class="col-12">
            <label for="inputAddress" class="form-label">%Poisson</label>
            <input type="number" class="form-control" id="inputAddress"  name="pourcentageP">
        </div>
        
        <div class="col-12">
            <label for="inputAddress" class="form-label">Prix </label>
            <input type="number" class="form-control" id="inputAddress" placeholder="prix" name="prix">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Créer</button>
        </div>
    </form><!-- Vertical Form -->

</div>

