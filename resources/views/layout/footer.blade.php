<!--  <section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 mr-auto text-center text-md-left mb-5 mb-md-0">
            
          </div>
          <div class="form-group col-md-5">
          <h2>Follow-Us On</h2>
            
          </div>

           <div class="form-group col-md-7 text-right">
            <a href="https://www.facebook.com/cypherocean"><span class="icofont-facebook icofont-3x"></span></a>
            <a href="https://www.instagram.com/cypherocean/"><span class="icofont-instagram icofont-3x"></span></a>
            <a href="https://www.linkedin.com/company/cypherocean"><span class="icofont-linkedin icofont-3x"></span></a>
            <a href="https://wa.me/918200242382" target="_blank"><span class="icofont-whatsapp icofont-3x"></span></a>
            
          </div>
        </div>
      </div>
    </section>
 -->


<section class="section cta-section">
      <div class="container">
        <div class="row align-items-center">
          <form action="{{ route('review/store') }}" method="post" style="width:100%" accept-charset="utf-8">
            @csrf
            <div class="col-md-12 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Rate And Review</h2>
            </div>
            <div class="row">
                
              <div class="form-group col-md-5">
                <label for="name">Name:</label>
                <input type="name" class="form-control" name="name" placeholder="Enter your Name">
              </div>
              <div class="form-group col-md-5">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email">
              </div>
              <div class="form-group col-md-5 rate">
                <label for="rating">Star:</label>
                <div id="full_stars_example_two">
                    <div class="rating-group">
                      <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                      <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                      <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                      <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                      <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                      <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                      <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                      <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                      <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                      <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                  </div>
                </div>
              </div>
              <div class="form-group col-md-5">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" name="feedback" placeholder="Enter your Feedback"></textarea>
              </div>
            </div>

             <div class="form-group col-md-12 text-right">
              <input type="submit" class="btn btn-primary d-block w-10" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </section>

 <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        
          
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>About CypherOcean</h3>
          <p>Trusted fully managed dedicated software development teams in India, we deliver world-class custom software development projects on demand for our clients worldwide.</p>
          <p class="social">
            <a href="https://www.facebook.com/cypherocean"><span class="icofont-facebook"></span></a>
            <a href="https://www.instagram.com/cypherocean/"><span class="icofont-instagram"></span></a>
            <a href="https://www.linkedin.com/company/cypherocean"><span class="icofont-linkedin"></span></a>
            <a href="https://wa.me/918200242382" target="_blank"><span class="icofont-whatsapp"></span></a>
          </p>
        </div>
        <div class="col-md-7 ml-auto">
          <div class="row site-section pt-0">
            <div class="col-md-6 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="{{ url('/web_development') }}">Web Development</a></li>
                <li><a href="{{ url('/app_development') }}">Application Development</a></li>
                <li><a href="{{ url('/uiux_design') }}">UI/UX Designing</a></li>
                <li><a href="{{ url('/logo_design') }}">Logo & Brand Designing</a></li>
              </ul>
            </div>
          </div>
        </div>
      
        
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright CypherOcean. All Rights Reserved</p>
        </div>
      </div>

    </div>
  </footer>
