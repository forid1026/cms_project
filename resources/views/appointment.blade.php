@extends('layout')

  <section class="hero-section">
    <div class="hero-area hero-bg hero-overlay">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="her-text">
              <h3>Appointment</h3>
              <p><a href="/">Home /</a> Appointment</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="appointment mt-5 mb-5">
    <div class="container mt-3 py-4">
      <div class="row">
        <div class="col-md-5">
          <h3 class="title text-center mb-4">Appointment</h3>


          <form autocomplete="on">

            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Registration No:</label>

              <div class="col-sm-6 d-flex">
                <input type="text" class="form-control" id="inputreg">
              </div>
              <button class="btn btn-outline-primary search" type="submit">Search</button>
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
              <label for="inputreg" class="col-sm-4 col-form-label">Mobile No:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="inputreg">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Age:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="inputreg">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Date:</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" id="inputreg">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputreg" class="col-sm-4 col-form-label">Doctor Name:</label>
              <div class="col-sm-6">
                <select class="form-select form-control" aria-label="Default select example">
                  <option selected>List of Doctor's</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <input type="submit" name="Confirm" value="Confirm" class="btn btn-primary float-right" id="">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
