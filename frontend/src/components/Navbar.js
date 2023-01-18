import React from "react";
import { Link } from "react-router-dom";

export default function Navbar() {
  return (
    <>
      <div className="container-fluid nav-bar ">
        <nav className="navbar navbar-expand-lg bg-dark navbar-light py-0 px-4">
          <a
            href="index.html"
            className="navbar-brand d-flex align-items-center text-center"
          >
            <div className="icon p-2 me-2">
              <img
                className="img-fluid"
                src="/assets/img/icon-deal.png"
                alt="Icon"
                style={{ width: "30px", height: "30px" }}
              />
            </div>
            <h1 className="m-0 text-primary">Suite Home</h1>
          </a>
          <button
            type="button"
            className="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarCollapse">
            <div className="navbar-nav ms-auto">
              <Link to="/" className="nav-item nav-link active">
                Home
              </Link>
              <Link to="about" className="nav-item nav-link">
                About
              </Link>
              <div className="nav-item dropdown">
                <a
                  href="#"
                  className="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                >
                  Property
                </a>
                <div className="dropdown-menu rounded-0 m-0">
                  <Link to="/property_list" className="dropdown-item">
                    Property List
                  </Link>
                  <Link to="/property_type" className="dropdown-item">
                    Property Type
                  </Link>
                  <Link to="/property_agent" className="dropdown-item">
                    Property Agent
                  </Link>
                </div>
              </div>
              <div className="nav-item dropdown">
                <a
                  href="#"
                  className="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                >
                  Pages
                </a>
                <div className="dropdown-menu rounded-0 m-0">
                  <Link to="/testimonial" className="dropdown-item">
                    Testimonial
                  </Link>
                  <Link to="/team" className="dropdown-item">
                    Our Team
                  </Link>
                  <Link to="/error" className="dropdown-item">
                    404 Error
                  </Link>
                </div>
              </div>
              <Link to="/contact" className="nav-item nav-link">
                Contact
              </Link>
            </div>
            <a
              href="realestate.bdprogrammers.com"
              className="btn btn-primary px-3 d-none d-lg-flex"
            >
              Admin Panel
            </a>
          </div>
        </nav>
      </div>
    </>
  );
}
