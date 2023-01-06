import React from "react";
import OwlCarousel from "react-owl-carousel";
import { Link } from "react-router-dom";

export default function Header() {
  return (
    <div>
      <div className="container-fluid header bg-white p-0">
        <div className="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div className="col-md-6 p-5 mt-lg-5">
            <h1 className="display-5 animated fadeIn mb-4">
              Find A <span className="text-primary">Perfect Home</span> To Live
              With Your Family
            </h1>
            <p className="animated fadeIn mb-4 pb-2">
              Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
              Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
            </p>
            <Link
              to="/"
              className="btn btn-primary py-3 px-5 me-3 animated fadeIn"
            >
              Get Started
            </Link>
          </div>
          <div className="col-md-6 animated fadeIn">
            <div className=" header-carousel">
              <OwlCarousel items={1} className="owl-theme" loop autoplay={true}>
                <div className="owl-carousel-item">
                  <img
                    className="img-fluid"
                    src="/assets/img/carousel-1.jpg"
                    alt=""
                  />
                </div>
                <div className="owl-carousel-item">
                  <img
                    className="img-fluid"
                    src="/assets/img/carousel-2.jpg"
                    alt=""
                  />
                </div>
              </OwlCarousel>
            </div>
          </div>
        </div>
      </div>
      {/* <!-- Header End --> */}
      {/* <!-- Search Start --> */}
      <div
        className="container-fluid bg-primary mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style={{ padding: "35px" }}
      >
        <div className="container">
          <div className="row g-2">
            <div className="col-md-10">
              <div className="row g-2">
                <div className="col-md-4">
                  <input
                    type="text"
                    className="form-control border-0 py-3"
                    placeholder="Search Keyword"
                  />
                </div>
                <div className="col-md-4">
                  <select className="form-select border-0 py-3">
                    <option selected>Property Type</option>
                    <option value="1">Property Type 1</option>
                    <option value="2">Property Type 2</option>
                    <option value="3">Property Type 3</option>
                  </select>
                </div>
                <div className="col-md-4">
                  <select className="form-select border-0 py-3">
                    <option selected>Location</option>
                    <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option>
                  </select>
                </div>
              </div>
            </div>
            <div className="col-md-2">
              <button className="btn btn-dark border-0 w-100 py-3">
                Search
              </button>
            </div>
          </div>
        </div>
      </div>
      {/* <!-- Search End --> */}
    </div>
  );
}
