import React, { useEffect, useState } from "react";
import axios from "axios";
import BrandForm from "./BrandForm";

const BrandList = () => {
  const [brands, setBrands] = useState([]);
  const [isEditing, setIsEditing] = useState(false);
  const [currentBrandId, setCurrentBrandId] = useState(null);

  useEffect(() => {
    const fetchBrands = async () => {
      const response = await axios.get("http://localhost:8000/api/brands");
      setBrands(response.data);
    };
    fetchBrands();
  }, []);

  const handleDelete = async (id) => {
    await axios.delete(`http://localhost:8000/api/brands/${id}`);
    setBrands(brands.filter((brand) => brand.id !== id));
  };

  const handleEdit = (id) => {
    setCurrentBrandId(id);
    setIsEditing(true);
  };

  const handleFormSuccess = () => {
    setCurrentBrandId(null);
    setIsEditing(false);
    axios.get("http://localhost:8000/api/brands").then((response) => {
      setBrands(response.data);
    });
  };

  return (
    <div>
      <h1>Danh Sách Thương Hiệu</h1>
      <button onClick={() => setIsEditing(true)}>Thêm Thương Hiệu</button>
      {isEditing && (
        <BrandForm brandId={currentBrandId} onSuccess={handleFormSuccess} />
      )}
      <ul>
        {brands.map((brand) => (
          <li key={brand.id}>
            {brand.name}
            <button onClick={() => handleEdit(brand.id)}>Chỉnh Sửa</button>
            <button onClick={() => handleDelete(brand.id)}>Xóa</button>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default BrandList;
