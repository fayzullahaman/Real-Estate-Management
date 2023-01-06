/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

const ProductList = () => {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    getProducts();
  }, []);

  const getProducts = async () => {
    const products = await axios.get("http://localhost:8080/frontend/products");
    setProducts(products.data);
  };

  const deleteProduct = async (id) => {
    await axios.delete(`http://localhost:8080/products/${id}`);
    getProducts();
  };

  return (
    <div className="container">
      <h1>Product List</h1>
      <Link to="/add" className="button is-primary mt-5">
        Add New
      </Link>
      <table className="table table-striped">
        <thead>
          <tr>
            <th>SL</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {products.map((product, index) => (
            <tr key={product.id}>
              <td>{index + 1}</td>
              <td>
                <img
                  src={`http://localhost:8080/${product.product_image}`}
                  alt="image"
                  width={"90px"}
                />
              </td>
              <td>{product.product_name}</td>
              <td>{product.product_details}</td>
              <td>{product.product_price}</td>
              <td className="d-flex">
                <Link to={`/edit/${product.id}`} className="btn btn-info">
                  Edit
                </Link>
                <button
                  onClick={() => deleteProduct(product.id)}
                  className="btn btn-danger"
                >
                  Delete
                </button>
              </td>
            </tr>
          ))}
        </tbody>
        <tfoot>
          <tr>
            <th>SL</th>
            <th>Image</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
  );
};

export default ProductList;
