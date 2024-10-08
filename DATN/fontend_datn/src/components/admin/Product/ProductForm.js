import React, { useState, useEffect } from "react";
import axios from "axios";

const ProductForm = ({ productId, onSuccess }) => {
  const [product, setProduct] = useState({
    name: "",
    description: "",
    price: "",
    image: "",
    category_id: "",
  });

  const [categories, setCategories] = useState([]);

  useEffect(() => {
    const fetchCategories = async () => {
      const response = await axios.get("http://localhost:8000/api/categories");
      setCategories(response.data);
    };
    fetchCategories();

    if (productId) {
      const fetchProduct = async () => {
        const response = await axios.get(
          `http://localhost:8000/api/products/${productId}`
        );
        setProduct(response.data);
      };
      fetchProduct();
    }
  }, [productId]);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setProduct({ ...product, [name]: value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (productId) {
      await axios.put(
        `http://localhost:8000/api/products/${productId}`,
        product
      );
    } else {
      await axios.post("http://localhost:8000/api/products", product);
    }
    onSuccess();
  };

  return (
    <form onSubmit={handleSubmit}>
      <h2>{productId ? "Chỉnh Sửa Sản Phẩm" : "Thêm Sản Phẩm"}</h2>
      <div>
        <label>Tên Sản Phẩm:</label>
        <input
          type="text"
          name="name"
          value={product.name}
          onChange={handleChange}
          required
        />
      </div>
      <div>
        <label>Mô Tả:</label>
        <textarea
          name="description"
          value={product.description}
          onChange={handleChange}
          required
        />
      </div>
      <div>
        <label>Giá:</label>
        <input
          type="number"
          name="price"
          value={product.price}
          onChange={handleChange}
          required
        />
      </div>
      <div>
        <label>Hình Ảnh:</label>
        <input
          type="text"
          name="image"
          value={product.image}
          onChange={handleChange}
        />
      </div>
      <div>
        <label>Danh Mục:</label>
        <select
          name="category_id"
          value={product.category_id}
          onChange={handleChange}
          required
        >
          <option value="">Chọn Danh Mục</option>
          {categories.map((category) => (
            <option key={category.id} value={category.id}>
              {category.name}
            </option>
          ))}
        </select>
      </div>
      <button type="submit">{productId ? "Cập Nhật" : "Thêm"}</button>
    </form>
  );
};

export default ProductForm;
