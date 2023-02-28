<div class="tab-pane fade show active" id="General" role="tabpanel" aria-labelledby="pills" tabindex="0">
            <div class="row mb-4 layout-spacing layout-top-spacing">

                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="widget-content widget-content-area ecommerce-create-section">

                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Nom du produit">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <label>Description</label>
                                <div id="product-description"></div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area ecommerce-create-section">

                        <h5 class="mb-4">Paramètres SEO</h5>
                        
                        <div class="row mb-4">
                            <div class="col-xxl-12 mb-4">
                                <input type="text" class="form-control"  placeholder="Titre de la balise Meta">
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <input type="text" class="form-control"  placeholder="SEO H1">
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <input type="text" class="form-control"  placeholder="SEO H2">
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <input type="text" class="form-control"  placeholder="SEO H3">
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <input type="text" class="form-control"  placeholder="Image alt">
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <input type="text" class="form-control"  placeholder="Image title">
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <input type="text" class="form-control"  placeholder="Meta Tag Title">
                            </div>
                            <div class="col-xxl-12">
                                <textarea name="post-meta-description" class="form-control" id="post-meta-description" cols="10" rows="5" placeholder="Description de la balise META"></textarea>
                            </div>
                            <div class="col-xxl-12">
                                <br>
                                <textarea name="post-meta-description" class="form-control" id="post-meta-description" cols="10" rows="5" placeholder="Meta Tag Keywords"></textarea>
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <br>
                                <input  id="tags" class="form-control product-tags"  placeholder="Product Tags">
                            </div>
                        </div>

                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="product-images">Additional Images</label>
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
                            
                        </div>

                    </div>
                    
                </div>

                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="row">
                        <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                            <div class="widget-content widget-content-area ecommerce-create-section">
                                <div class="row">
                                    <div class="col-xxl-12 mb-4">
                                        <div class="switch form-switch-custom switch-inline form-switch-secondary">
                                            <input class="switch-input" type="checkbox" role="switch" id="in-stock">
                                            <label class="switch-label" for="in-stock">En stock</label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-md-6 mb-4">
                                        <label for="proCode">Référence du produit</label>
                                        <input type="text" class="form-control" id="proCode" value="">
                                    </div>
                                    <div class="col-xxl-12 col-md-6 mb-4">
                                        <label for="proSKU">Product SKU</label>
                                        <input type="text" class="form-control" id="proSKU" value="">
                                    </div>
                                    <div class="col-xxl-12 col-md-6 mb-4">
                                        <label for="gender">Gender</label>
                                        <select class="form-select" id="gender">
                                            <option value="">Choose...</option>
                                            <option value="men">Men</option>
                                            <option value="women">Women</option>
                                            <option value="kids">Kids</option>
                                            <option value="unisex">Unisex</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-12 col-md-6 mb-4">
                                        <label for="category">Category</label>
                                        <select class="form-select" id="category">
                                            <option value="">Choose...</option>
                                            <option value="electronics">Electronics</option>
                                            <option value="clothing">Clothing</option>
                                            <option value="organic">Organic</option>
                                            <option value="apperal">Apperal</option>
                                            <option value="accessories">Accessories</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
                            <div class="widget-content widget-content-area ecommerce-create-section">
                                <div class="row">
                                    <div class="col-sm-12 mb-4">
                                        <label for="regular-price">Regular Price</label>
                                        <input type="text" class="form-control" id="regular-price" value="">
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                        <label for="sale-price">Sale Price</label>
                                        <input type="text" class="form-control" id="sale-price" value="">
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                        <div class="switch form-switch-custom switch-inline form-switch-danger">
                                            <input class="switch-input" type="checkbox" role="switch" id="pricing-includes-texes">
                                            <label class="switch-label" for="pricing-includes-texes">Price includes taxes</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                   
                                </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-success w-100">Ajouter produit</button>
                                    </div>
                                </div>                                            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>