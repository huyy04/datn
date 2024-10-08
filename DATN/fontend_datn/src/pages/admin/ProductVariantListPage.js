import React, { useEffect, useState } from "react";
import axios from "axios";

const ProductVariantListPage = () => {
  const [productVariants, setProductVariants] = useState([]);

  useEffect(() => {
    const fetchProductVariants = async () => {
      const response = await axios.get(
        "http://localhost:8000/api/product-variants"
      );
      setProductVariants(response.data);
    };
    fetchProductVariants();
  }, []);

  return (
    <div>
      <h1>Danh Sách Biến Thể Sản Phẩm</h1>
      <ul>
        {productVariants.map((variant) => (
          <li key={variant.id}>{variant.name}</li>
        ))}
      </ul>
    </div>
  );
};

export default ProductVariantListPage;
