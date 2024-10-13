import React, { useEffect, useState } from "react";
import axios from "axios";

const BrandListPage = () => {
  const [brands, setBrands] = useState([]);

  useEffect(() => {
    const fetchBrands = async () => {
      const response = await axios.get("http://localhost:8000/api/brands");
      setBrands(response.data);
    };
    fetchBrands();
  }, []);

  return (
    <div>
      <h1>Danh Sách Thương Hiệu</h1>
      <ul>
        {brands.map((brand) => (
          <li key={brand.id}>{brand.name}</li>
        ))}
      </ul>
    </div>
  );
};

export default BrandListPage;
