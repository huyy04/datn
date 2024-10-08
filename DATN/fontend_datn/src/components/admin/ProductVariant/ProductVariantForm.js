import React, { useEffect, useState } from "react";
import axios from "axios";

const ProductVariantForm = ({ variantId, onSuccess }) => {
  const [name, setName] = useState("");
  const [isEditing, setIsEditing] = useState(false);

  useEffect(() => {
    if (variantId) {
      const fetchVariant = async () => {
        const response = await axios.get(
          `http://localhost:8000/api/product-variants/${variantId}`
        );
        setName(response.data.name);
        setIsEditing(true);
      };
      fetchVariant();
    } else {
      setName("");
      setIsEditing(false);
    }
  }, [variantId]);

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (isEditing) {
      await axios.put(
        `http://localhost:8000/api/product-variants/${variantId}`,
        { name }
      );
    } else {
      await axios.post("http://localhost:8000/api/product-variants", { name });
    }
    onSuccess();
  };

  return (
    <form onSubmit={handleSubmit}>
      <label>
        Tên Biến Thể Sản Phẩm:
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

export default ProductVariantForm;
