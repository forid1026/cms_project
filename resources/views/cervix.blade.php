@extends('layout')

<section class="hero-section">
    <div class="hero-area hero-bg hero-overlay">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="her-text">
              <h3>Cervix Screening</h3>
              <p><a href="/">Home /</a> Cervix Screening</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cervix mt-5 mb-5 ">
    <div class="container mt-3 py-4">
      <div class="row m-auto">
        <div class="col-md-5">
          <form autocomplete="on">
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Symptom:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Select from Option</option>
                  <option value="1">AUB</option>
                  <option value="2">Post Coital Bleeding</option>
                  <option value="3">Pain Abdomen</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Sign:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Select from Option</option>
                  <option value="1">Normal</option>
                  <option value="2">Abnormal</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">VIA:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Select from Option</option>
                  <option value="1">Positive</option>
                  <option value="2">Negative</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Date:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Follow Up Date:</label>
              <div class="col-sm-6">
                <input placeholder="Day/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-5 col-form-label">Pap's Smear Cytology:</label>
              <div class="col-sm-6 custom">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Select from Option</option>
                  <option value="1">Positive</option>
                  <option value="2">Negative</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Date:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Follow Up Date:</label>
              <div class="col-sm-6">
                <input placeholder="Day/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">LBC:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Select from Option</option>
                  <option value="1">Positive</option>
                  <option value="2">Negative</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Date:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Follow Up Date:</label>
              <div class="col-sm-6">
                <input placeholder="Day/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">HPV DNA:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Select from Option</option>
                  <option value="1">Positive</option>
                  <option value="2">Negative</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Date:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Follow Up Date:</label>
              <div class="col-sm-6">
                <input placeholder="Day/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-5">
          <form autocomplete="on">
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Colposcopy:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Select from Option</option>
                  <option value="1">Normal</option>
                  <option value="2">Suspicious</option>
                  <option value="3">Abnormal</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">CIN:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Treatment</option>
                  <option value="1">Cold</option>
                  <option value="2">LEEP</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Date:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Follow Up Date:</label>
              <div class="col-sm-6">
                <input placeholder="Day/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">CIN 2:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Treatment</option>
                  <option value="1">Cold</option>
                  <option value="2">LEEP</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Date:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Follow Up Date:</label>
              <div class="col-sm-6">
                <input placeholder="Day/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">CIN 3:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Treatment</option>
                  <option value="1">LEEP</option>
                  <option value="2">Cone Biopsy/TAH</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Date:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Follow Up Date:</label>
              <div class="col-sm-6">
                <input placeholder="Day/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Histopathology:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>Select from Option</option>
                  <option value="1">CIN 1</option>
                  <option value="2">CIN 2</option>
                  <option value="3">CIN 3</option>
                  <option value="4">Micro invasive</option>
                  <option value="3">Invasive Cancer</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Treatment:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" disabled id="inputreg" placeholder="Select Below Option">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Radical surgery:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Radiotherapy:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Adjuvant:</label>
              <div class="col-sm-6">
                <input placeholder="Date/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Follow Up Date:</label>
              <div class="col-sm-6">
                <input placeholder="Day/Month/Year" class="form-control" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-10">
                <input type="submit" name="Edit" value="Edit" class="btn btn-primary float-right ml-3" id="">
                <input type="submit" name="Save" value="Save" class="btn btn-primary float-right" id="">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
