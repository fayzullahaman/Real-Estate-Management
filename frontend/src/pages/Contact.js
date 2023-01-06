import React from "react";

export default function Contact() {
  return (
    <div>
      <div class="container-xxl py-5">
        <div class="container">
          <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style={{ maxWidth: "600px" }}
          >
            <h1 class="mb-3">Contact Us</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div class="row g-4">
            <div class="col-12">
              <div class="row gy-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                  <div class="bg-light rounded p-3">
                    <div
                      class="d-flex align-items-center bg-white rounded p-3"
                      style={{ border: "1px dashed rgba(0, 185, 142, .3)" }}
                    >
                      <div
                        class="icon me-3"
                        style={{ width: "45px", height: "45px" }}
                      >
                        <i class="fa fa-map-marker-alt text-primary"></i>
                      </div>
                      <span>Scout Market, Kakrail, Dhaka</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                  <div class="bg-light rounded p-3">
                    <div
                      class="d-flex align-items-center bg-white rounded p-3"
                      style={{ border: "1px dashed rgba(0, 185, 142, .3)" }}
                    >
                      <div
                        class="icon me-3"
                        style={{ width: "45px", height: "45px" }}
                      >
                        <i class="fa fa-envelope-open text-primary"></i>
                      </div>
                      <span>realstate@example.com</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                  <div class="bg-light rounded p-3">
                    <div
                      class="d-flex align-items-center bg-white rounded p-3"
                      style={{ border: "1px dashed rgba(0, 185, 142, .3)" }}
                    >
                      <div
                        class="icon me-3"
                        style={{ width: "45px", height: "45px" }}
                      >
                        <i class="fa fa-phone-alt text-primary"></i>
                      </div>
                      <span>+012 345 6789</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <iframe
                class="position-relative rounded w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3009421531497!2d90.40954381533085!3d23.736645495217736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9f6eb06bfb9%3A0xcbefa252dc74c3e9!2sThe%20Computers%20Ltd%20(TCLD)!5e0!3m2!1sen!2sbd!4v1672633555666!5m2!1sen!2sbd"
                frameborder="0"
                style={{ minHeight: "400px", border: "0" }}
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
            <div class="col-md-6">
              <div class="wow fadeInUp" data-wow-delay="0.5s">
                <p class="mb-4">
                  The contact form is currently inactive. Get a functional and
                  working contact form with Ajax & PHP in a few minutes. Just
                  copy and paste the files, add a little code and you're done.{" "}
                  <a href="https://realstate.bdprogrammers.com/contact-form">
                    Download Now
                  </a>
                  .
                </p>
                <form>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input
                          type="text"
                          class="form-control"
                          id="name"
                          placeholder="Your Name"
                        />
                        <label for="name">Your Name</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          placeholder="Your Email"
                        />
                        <label for="email">Your Email</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input
                          type="text"
                          class="form-control"
                          id="subject"
                          placeholder="Subject"
                        />
                        <label for="subject">Subject</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea
                          class="form-control"
                          placeholder="Leave a message here"
                          id="message"
                          style={{ height: "150px" }}
                        ></textarea>
                        <label for="message">Message</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100 py-3" type="submit">
                        Send Message
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
