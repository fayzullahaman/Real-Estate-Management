import axios from "axios";
import React, { useEffect, useState } from "react";

export default function Property_type() {

  const [propertyType, setPropertyType] = useState([]);
  // console.log(propertyType);
  useEffect(() => {
    getPropertyType();
  }, []);

  const getPropertyType = async () => {
    const result = await axios.get("http://localhost:8080/frontend/propertytype");
    setPropertyType(result.data);
}

  return (
    <div>
      <div className="container-xxl py-5">
        <div className="container">
          <div
            className="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style={{ maxWidth: "600px" }}
          >
            <h1 className="mb-3">Property Types</h1>
            <p>
              Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
              dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
              rebum vero dolor duo.
            </p>
          </div>
          <div className="row g-4">
            {propertyType.map((type, item)=>(
            <div
              className="col-lg-3 col-sm-6 wow fadeInUp"
              data-wow-delay="0.1s"
            >
              <a
                className="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div className="rounded p-4">
                  <div className="icon mb-3">
                    <img
                      className="img-fluid"
                      src="assets/img/icon-apartment.png"
                      alt="Icon"
                    />
                  </div>
                  <h6>{type.type_name}</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
}
