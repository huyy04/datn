import React, { useEffect, useState } from "react";
import axios from "axios";
import ProductForm from "../../components/admin/Product/ProductForm";

const ProductListPage = () => {
  const [products, setProducts] = useState([]);
  const [isEditing, setIsEditing] = useState(false);
  const [currentProductId, setCurrentProductId] = useState(null);

  useEffect(() => {
    const fetchProducts = async () => {
      const response = await axios.get("http://localhost:8000/api/products");
      setProducts(response.data);
    };
    fetchProducts();
  }, []);

  const handleDelete = async (id) => {
    await axios.delete(`http://localhost:8000/api/products/${id}`);
    setProducts(products.filter((product) => product.id !== id));
  };

  const handleEdit = (id) => {
    setCurrentProductId(id);
    setIsEditing(true);
  };

  const handleFormSuccess = () => {
    setCurrentProductId(null);
    setIsEditing(false);
    axios.get("http://localhost:8000/api/products").then((response) => {
      setProducts(response.data);
    });
  };

  return (
    <div>
      <h1>Danh Sách Sản Phẩm</h1>
      <button onClick={() => setIsEditing(true)}>Thêm Sản Phẩm</button>
      {isEditing && (
        <ProductForm
          productId={currentProductId}
          onSuccess={handleFormSuccess}
        />
      )}
      <ul>
        {products.map((product) => (
          <li key={product.id}>
            {product.title} - {product.price} VNĐ
            <button onClick={() => handleEdit(product.id)}>Chỉnh Sửa</button>
            <button onClick={() => handleDelete(product.id)}>Xóa</button>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default ProductListPage;
