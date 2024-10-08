import React, { useEffect, useState } from "react";
import axios from "axios";
import ProductVariantForm from "./ProductVariantForm";

const ProductVariantList = () => {
  const [productVariants, setProductVariants] = useState([]);
  const [isEditing, setIsEditing] = useState(false);
  const [currentVariantId, setCurrentVariantId] = useState(null);

  useEffect(() => {
    const fetchVariants = async () => {
      const response = await axios.get(
        "http://localhost:8000/api/product-variants"
      );
      setProductVariants(response.data);
    };
    fetchVariants();
  }, []);

  const handleDelete = async (id) => {
    await axios.delete(`http://localhost:8000/api/product-variants/${id}`);
    setProductVariants(productVariants.filter((variant) => variant.id !== id));
  };

  const handleEdit = (id) => {
    setCurrentVariantId(id);
    setIsEditing(true);
  };

  const handleFormSuccess = () => {
    setCurrentVariantId(null);
    setIsEditing(false);
    axios.get("http://localhost:8000/api/product-variants").then((response) => {
      setProductVariants(response.data);
    });
  };

  return (
    <div>
      <h1>Danh Sách Biến Thể Sản Phẩm</h1>
      <button onClick={() => setIsEditing(true)}>Thêm Biến Thể Sản Phẩm</button>
      {isEditing && (
        <ProductVariantForm
          variantId={currentVariantId}
          onSuccess={handleFormSuccess}
        />
      )}
      <ul>
        {productVariants.map((variant) => (
          <li key={variant.id}>
            {variant.name}
            <button onClick={() => handleEdit(variant.id)}>Chỉnh Sửa</button>
            <button onClick={() => handleDelete(variant.id)}>Xóa</button>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default ProductVariantList;
