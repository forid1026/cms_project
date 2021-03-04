@extends('layout')

<section class="hero-section">
  <div class="hero-area hero-bg hero-overlay">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="her-text">
            <h3>Breast Screening</h3>
            <p><a href="/">Home /</a> Breast Screening</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="breast mt-5 mb-5">
  <div class="container mt-3 py-4">
    <div class="row">
      <div class="col-md-5">
        <form autocomplete="on">
          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Registration No:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputreg">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Patient Name:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputreg">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Husband No:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputreg">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Husband Name:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputreg">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Patient NID:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputreg">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Patient Mobile No:</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputreg">
            </div>
          </div>



          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Presence of Lump:</label>
            <div class="col-sm-6">
              <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select from Option</option>
                <option value="1">Negative</option>
                <option value="2">Positive</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Discharge:</label>
            <div class="col-sm-6">
              <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select from Option</option>
                <option value="1">Present</option>
                <option value="2">Absent</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">CBE:</label>
            <div class="col-sm-6">
              <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select from Option</option>
                <option value="1">Positive</option>
                <option value="2">Negative</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">USG:</label>
            <div class="col-sm-6">
              <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select from Option</option>
                <option value="1">Lump</option>
                <option value="2">Mastitis</option>
                <option value="3">Fibro cystic Disease of Breast</option>
                <option value="4">Others</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Mammography:</label>
            <div class="col-sm-6">
              <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select from Option</option>
                <option value="1">Normal</option>
                <option value="2">Abnormal</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">FNAC:</label>
            <div class="col-sm-6">
              <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select from Option</option>
                <option value="1">Normal</option>
                <option value="2">Abnormal</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Cancer:</label>
            <div class="col-sm-6">
              <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select from Option</option>
                <option value="1">Positive</option>
                <option value="2">Negative</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Operations:</label>
            <div class="col-sm-6">
              <select class="form-select form-control" aria-label="Default select example">
                <option selected>Select from Option</option>
                <option value="1">Lobectomy</option>
                <option value="2">Mastectomy</option>
                <option value="3">Mastectomy and axillary Clearness</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputreg" class="col-sm-4 col-form-label">Follow-Up:</label>
            <div class="col-sm-6">
              <textarea rows="4" class="form-control" cols="50"
                placeholder="Monthly/Yearly&#10;DD/MM/YY&#10;(3 Months/6 Months/1 year"></textarea>
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