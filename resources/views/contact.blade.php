@extends('layout')


<section class="hero-section">
    <div class="hero-area hero-bg hero-overlay">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="hero-text">
              <h3>Contact</h3>
              <p><a href="/">Home /</a> Contact</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- google map -->
  <div class="container py-5 mt-5">
    <div class="row">
      <div class="col-md-12 m-auto">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58408.97484108492!2d90.33915649884639!3d23.798644769268602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c71a2d5d3523%3A0x4344a010db52aa4c!2sCMS%20Dhaka!5e0!3m2!1sen!2sbd!4v1614081052674!5m2!1sen!2sbd"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>

  <!-- Contact Information -->

  <section class="contact-info">
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-heading">Get In Touch</h2>
        </div>
        <div class="col-md-8">
          <div class="contact-form">
            <div class="row">
              <div class="col-md-6 py-2">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="First Name">
                </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Last Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 py-2">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Phone">
                </div>
              </div>
              <div class="col-md-6 py-2">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Email">
                </div>
              </div>
            </div>
            <div>
              <div class="form-group py-2">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                  placeholder="Subject"></textarea>
              </div>
              <div>
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-3 offset-md-1 py-2 ">
          <div class="media contact-info">
            <span class="contact-info-icon">
              <i class="fa fa-home"></i>
            </span>
            <div class="media-body">
              <h3>C.M.H In Road, Dhaka 1206</h3>
              <p>Dhaka Cantonment</p>
            </div>

          </div>
          <div class="media contact-info">
            <span class="contact-info-icon">
              <i class="fa fa-phone"></i>
            </span>
            <div class="media-body">
              <h3>+880111212121</h3>
              <p>Mon to Fri 9 AM to 6PM</p>
            </div>

          </div>
          <div class="media contact-info mt-3">
            <span class="contact-info-icon">
              <i class="fa fa-envelope-o"></i>
            </span>
            <div class="media-body">
              <h3>support@gmail.com</h3>
              <p>Send us your query anytime!</p>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>