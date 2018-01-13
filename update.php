<div class="tab-pane active" id="settings">
                <form method="post" enctype="multipart/data-form" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName"  class="col-sm-2 control-label"><?= echo $data['fullname']; ?></label>

                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label"><?= echo $data['email']; ?></label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"><?= echo $data['password']; ?></label>

                    <div class="col-sm-10">
                      <input type="text" name="password" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label"><?= echo $data['mobile']; ?></label>

                    <div class="col-sm-10">
                      <input type="number" name="mobile" class="form-control" id="mobile" required pattern="[0,9]{10}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">image</label>

                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>