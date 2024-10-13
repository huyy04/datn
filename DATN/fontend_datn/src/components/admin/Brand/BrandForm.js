import React, { useEffect, useState } from "react";
import axios from "axios";

const BrandForm = ({ brandId, onSuccess }) => {
  const [name, setName] = useState("");
  const [isEditing, setIsEditing] = useState(false);

  useEffect(() => {
    if (brandId) {
      const fetchBrand = async () => {
        const response = await axios.get(
          `http://localhost:8000/api/brands/${brandId}`
        );
        setName(response.data.name);
        setIsEditing(true);
      };
      fetchBrand();
    } else {
      setName("");
      setIsEditing(false);
    }
  }, [brandId]);

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (isEditing) {
      await axios.put(`http://localhost:8000/api/brands/${brandId}`, { name });
    } else {
      await axios.post("http://localhost:8000/api/brands", { name });
    }
    onSuccess();
  };

  return (
    <form onSubmit={handleSubmit}>
      <label>
        Tên Thương Hiệu:
        <input
          type="text"
          value={name}
          onChange={(e) => setName(e.target.value)}
          required
        />
      </label>
      <button type="submit">{isEditing ? "Cập Nhật" : "Thêm"}</button>
    </form>
  );
};

export default BrandForm;
