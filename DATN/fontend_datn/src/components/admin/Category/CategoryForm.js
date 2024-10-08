import React, { useState, useEffect } from "react";
import axios from "axios";

const CategoryForm = ({ categoryId, onSuccess }) => {
  const [category, setCategory] = useState({
    name: "",
  });

  useEffect(() => {
    if (categoryId) {
      const fetchCategory = async () => {
        const response = await axios.get(
          `http://localhost:8000/api/categories/${categoryId}`
        );
        setCategory(response.data);
      };
      fetchCategory();
    }
  }, [categoryId]);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setCategory({ ...category, [name]: value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (categoryId) {
      await axios.put(
        `http://localhost:8000/api/categories/${categoryId}`,
        category
      );
    } else {
      await axios.post("http://localhost:8000/api/categories", category);
    }
    onSuccess();
  };

  return (
    <form onSubmit={handleSubmit}>
      <h2>{categoryId ? "Chỉnh Sửa Danh Mục" : "Thêm Danh Mục"}</h2>
      <div>
        <label>Tên Danh Mục:</label>
        <input
          type="text"
          name="name"
          value={category.name}
          onChange={handleChange}
          required
        />
      </div>
      <button type="submit">{categoryId ? "Cập Nhật" : "Thêm"}</button>
    </form>
  );
};

export default CategoryForm;
