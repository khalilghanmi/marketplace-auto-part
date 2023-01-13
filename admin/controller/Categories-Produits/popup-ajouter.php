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
                                            <form class="row g-3" id='myforme'  enctype="multipart/form-data">
                                            <div id='alerte'></div>
                                            <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Nom de catégorie</label>
                                        <input type="text" name="name_category" class="form-control" >
                                            </div>
                                            <div class="col-6">
                                        <label for="product-images">Parent</label>
                                        
                                            <select id="input-tags" name="parent" class="form-control" placeholder="Select a person..." autocomplete="off">
                                                <option value="">Select a person...</option>
                                                <option value="a">Thomas Edison</option>
                                                <option value="b">Nikola</option>
                                                <option value="c">Nikola Tesla</option>
                                                <option value="d">Arnold Schwarzenegger</option>
                                                <option value="e">khalil ghanmi</option>
                                                <option value="fb">hatem ben ammar</option>
                                                <option value="g">aziz fnoun</option>
                                                <option value="h">amir ouled hssan</option>
                                                <option value="i">haythem gargouri</option>
                                                <option value="j">ghanmi hamza</option>
                                                <option value="k">amine ouled hssan</option>
                                                <option value="l">khalil khedri</option>
                                            </select>
                                         
                                            </div>
                                            <div class="col-6">
                                        <label for="product-images">Description</label>
                                                <textarea class="form-control" name="description_category" aria-label="With textarea"></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                            <label for="inputEmail4" class="form-label">Upload Images</label><br>
                                            <input class="multiple-file-upload" type="file" name="category_image" accept="image/*"  /> 
                                            </div>
                                            <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Titre de la balise Meta</label>
                                        <input type="text" name="meta_title" class="form-control" >
                                            </div>
                                            <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Description de la balise méta</label>
                                        <textarea class="form-control" name="meta_description" aria-label="With textarea"></textarea>
                                            </div>
                                            <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Mots-clés des balises méta</label>
                                        <textarea class="form-control" name="meta_keyword" aria-label="With textarea"></textarea>
                                            </div>
                                        <div class="col-6">
                                        <label for="inputEmail4" class="form-label">Statut attributes</label>
                                            <div class="form-check">
                                            <div class="form-check form-switch form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="Statut" role="switch" id="flexSwitchCheckChecked" checked>
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
                                        <a href="#" class="btn btn-primary" id='gi'>Enregistrer</a>
                                        </div>
                                    </form>

                                            </div>
                                            
                                        </div>
                                      </div>
                    </div>