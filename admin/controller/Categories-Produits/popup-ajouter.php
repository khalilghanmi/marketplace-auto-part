<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Liste des categories</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="body" style="margin: 30px;">
                                            <form class="row g-3" method="post" action="controller/Categories-Produits/ajouter.php" enctype="multipart/form-data">
                                            
                                            <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Nom de catégorie</label>
                                        <input type="text" name="name_marques"class="form-control" required="required">
                                            </div>
                                            <div class="col-6">
                                        <label for="product-images">Parent</label>
                                        <div id="select-box" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <select id="select-beast" placeholder="Select a person..." autocomplete="off">
                                        <option value="">Select a person...</option>
                                        <option value="4">Thomas Edison</option>
                                        <option value="1">Nikola</option>
                                        <option value="3">Nikola Tesla</option>
                                        <option value="5">Arnold Schwarzenegger</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                                           <input type="text" name="name_marques"class="form-control" required="required">
                                            </div>
                                            <div class="col-6">
                                        <label for="product-images">Description</label>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                            <label for="inputEmail4" class="form-label">Upload Images</label><br>
                                            <input class="multiple-file-upload" type="file" name="image_marques" accept="image/*"  required="required"/> 
                                            </div>
                                            <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Titre de la balise Meta</label>
                                        <input type="text" name="name_marques"class="form-control" required="required">
                                            </div>
                                            <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Description de la balise méta</label>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                            <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Mots-clés des balises méta</label>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                            </div>
                                        <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Statut attributes</label>
                                            <div class="form-check">
                                            <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="statut" role="switch" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Statut</label>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                        
                                        </div>
                                        <div class="col-3">
                                        <a href="#" class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</a>
                                        </div>
                                        <div class="col-3">          
                                        <button type="submit" name="btnsave" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </form>

                                            </div>
                                            
                                        </div>
                                      </div>
                    </div>