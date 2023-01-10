<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Ajouter Client</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="body" style="margin: 30px;">
                                            <div id='alerte'></div>
                                            <form class="row g-3" id='myforme'>
                                            <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Nom</label>
                                            <input type="text" name="nom"class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Prénom</label>
                                            <input type="text" name="prenom" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Mot de passe</label>
                                            <input type="password" name="password" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Addresse</label>
                                            <input type="text" name="adresse" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">Code Postale</label>
                                            <input type="number" name="code_p" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">Mobile</label>
                                            <input type="phone"  name="mobile" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-6">
                                        <label for="inputCivilité" class="form-label">Civilité</label><br>
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input" type="radio" value="homme" name="Civilite" id="form-check-radio-primary" checked="">
                                             <label class="form-check-label" for="form-check-radio-primary">
                                               Homme
                                             </label>
                                        </div>

                                        <div class="form-check form-check-info form-check-inline">
                                         <input class="form-check-input" type="radio" value="femme" name="Civilite" id="form-check-radio-info">
                                             <label class="form-check-label" for="form-check-radio-info">
                                                Femme
                                             </label>
                                        </div>
                  
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputdatenessance" class="form-label">Date de naissance</label>
                                            <input type="date" name="date_n" class="form-control">
                                        </div>
                                        
                                        
                                        <div class="col-8">
                                            <div class="form-check">
                                            <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="statut" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Statut</label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                        <a href="#" class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</a>
                                        </div>
                                        <div class="col-2">          
                                                                       
                                        <a href="#" class="btn btn-primary" id='gi'>Enregistrer</a>
                                        </div>
                                    </form>

                                            </div>
                                            
                                        </div>
                                      </div>
                    </div>