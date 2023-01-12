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
                                        <label for="inputEmail4" class="form-label">Image marque</label><br>
                                        <input class="multiple-file-upload" type="file" name="image_marques" accept="image/*"  required="required"/> 
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

                                        <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Product Name">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Description</label>
                                        <div class="widget-content widget-content-area">
                                    <div id="content-container">
                                        <div id="toolbar-container">
                                            <button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
                                            <button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
                                            <button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
                                            <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button>
                                            <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button>
                                        </div>
                                        <div id="quill-tooltip">
                                            </div>
                                    </div>

                                </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="product-images">Upload Images</label>
                                        <div class="multiple-file-upload">
                                            <input type="file" 
                                                class="filepond file-upload-multiple"
                                                name="filepond"
                                                id="product-images" 
                                                multiple 
                                                data-allow-reorder="true"
                                                data-max-file-size="3MB"
                                                data-max-files="5">
                                        </div>
                                    </div>

                                    <div class="col-md-4 text-center">
                                        <div class="switch form-switch-custom switch-inline form-switch-primary mt-4">
                                            <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked>
                                            <label class="switch-label" for="showPublicly">Display publicly</label>
                                        </div>
                                    </div>









                                        <div class="col-2">
                                        <a href="#" class="btn btn-light-dark" data-bs-dismiss="modal">Annuler</a>
                                        </div>
                                        <div class="col-2">          
                                        <button type="submit" name="btnsave" class="btn btn-primary">Enregistrer</button>
                                        
                                        </div>
                                    </form>

                                            </div>
                                            
                                        </div>
                                      </div>
                    </div>