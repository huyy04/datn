import React, { useEffect, useState } from "react";
import axios from "axios";
import CategoryForm from "./CategoryForm";

const CategoryList = () => {
    const [categories, setCategories] = useState([]);
    const [isEditing, setIsEditing] = useState(false);
    const [currentCategoryId, setCurrentCategoryId] = useState(null);

    useEffect(() => {
        const fetchCategories = async () => {
            const response = await axios.get(
                "http://localhost:8000/api/categories"
            );
            setCategories(response.data);
        };
        fetchCategories();
    }, []);

    const handleDelete = async (id) => {
        await axios.delete(`http://localhost:8000/api/categories/${id}`);
        setCategories(categories.filter((category) => category.id !== id));
    };

    const handleEdit = (id) => {
        setCurrentCategoryId(id);
        setIsEditing(true);
    };

    const handleFormSuccess = () => {
        setCurrentCategoryId(null);
        setIsEditing(false);
        axios.get("http://localhost:8000/api/categories").then((response) => {
            setCategories(response.data);
        });
    };

    return (
        <div>
            <h1>Danh Sách Danh Mục</h1>
            <button onClick={() => setIsEditing(true)}>Thêm Danh Mục</button>
            {isEditing && (
                <CategoryForm
                    categoryId={currentCategoryId}
                    onSuccess={handleFormSuccess}
                />
            )}
            <ul>
                {categories.map((category) => (
                    <li key={category.id}>
                        {category.name}
                        <button onClick={() => handleEdit(category.id)}>
                            Chỉnh Sửa
                        </button>
                        <button onClick={() => handleDelete(category.id)}>
                            Xóa
                        </button>
                    </li>
                ))}
            </ul>
        </div>
    );
};

export default CategoryList;
