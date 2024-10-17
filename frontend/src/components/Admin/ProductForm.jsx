import React, { useState, useEffect } from "react";
import axios from "axios";

const ProductForm = ({ selectedProduct, onProductSaved }) => {
    const [formData, setFormData] = useState({
        title: "",
        description: "",
        price: "",
    });

    useEffect(() => {
        if (selectedProduct) {
            setFormData({
                title: selectedProduct.title,
                description: selectedProduct.description,
                price: selectedProduct.price,
            });
        }
    }, [selectedProduct]);

    const handleChange = (e) => {
        setFormData({
            ...formData,
            [e.target.name]: e.target.value,
        });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            if (selectedProduct) {
                await axios.put(
                    `/api/san-pham/update/${selectedProduct.id}`,
                    formData
                );
            } else {
                await axios.post("/api/san-pham/store", formData);
            }
            onProductSaved();
        } catch (error) {
            console.error("Error saving product:", error);
        }
    };

    return (
        <form onSubmit={handleSubmit}>
            <div>
                <label>Title:</label>
                <input
                    type="text"
                    name="title"
                    value={formData.title}
                    onChange={handleChange}
                />
            </div>
            <div>
                <label>Description:</label>
                <input
                    type="text"
                    name="description"
                    value={formData.description}
                    onChange={handleChange}
                />
            </div>
            <div>
                <label>Price:</label>
                <input
                    type="number"
                    name="price"
                    value={formData.price}
                    onChange={handleChange}
                />
            </div>
            <button type="submit">
                {selectedProduct ? "Update Product" : "Add Product"}
            </button>
        </form>
    );
};

export default ProductForm;
