import axios from "axios";
import React, { useEffect, useState } from "react";

export default function Testimonial() {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    getProducts();
  }, []);

  const getProducts = async () => {
    const products = await axios.get("http://localhost:8080/frontend/products");
    setProducts(products.data);
  };

  return (
    <div className="container">
      <div className="row g-4">
        {products.map((product, index) => (
          <div className="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div className="team-item rounded overflow-hidden">
              <div className="position-relative">
                <img
                  className="img-fluid"
                  src={`http://localhost:8080/${product.product_image}`}
                  alt=""
                  style={{ width: "300px", height: "180px" }}
                />
              </div>
              <div className="text-center p-4">
                <h5 className="fw-bold mb-0">{product.product_name}</h5>
                <small>Designation</small>
              </div>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}
