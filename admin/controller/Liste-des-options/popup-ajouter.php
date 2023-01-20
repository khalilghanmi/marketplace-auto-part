
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Ajouter options</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="body" style="margin: 30px;">
                                            <div id='alerte'></div>
                                            <form class="row g-3" id='myforme'>
                                            <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label">Option Name</label>
                                            <input type="text" name="nom"class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword4"  class="form-label ">Type</label>
                                            <select id="liste" name="parent" class="form-control seletors" placeholder="Select a person..." autocomplete="off">
                                            <optgroup label="Choose">
                                            <option value="select">Select</option>
                                            <option value="radio">Radio</option>
                                            <option value="checkbox">Checkbox</option>
                                            </optgroup>
                                            <optgroup label="Input">
                                            <option value="text">Text</option>
                                            <option value="textarea">Textarea</option>
                                            </optgroup>
                                            <optgroup label="File">
                                            <option value="file">File</option>
                                            </optgroup>
                                            <optgroup label="Date">
                                            <option value="date">Date</option>
                                            <option value="time">Time</option>
                                            <option value="datetime">Date &amp; Time</option>
                                            </optgroup>
                                            </select>        
                                        </div>
                                         
                                        <div class="col-md-12">
                                        <div id='affich'></div> 
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
