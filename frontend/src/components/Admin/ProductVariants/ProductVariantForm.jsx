import React, { useState, useEffect } from "react";
import {
    createProductVariant,
    updateProductVariant,
} from "../../../api/productVariant";

const ProductVariantForm = ({ variant, onSubmit, onCancel }) => {
    const [formData, setFormData] = useState({
        product_id: "",
        color_id: "",
        size_id: "",
        ram_size_id: "",
    });

    useEffect(() => {
        if (variant) {
            setFormData(variant);
        }
    }, [variant]);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData({ ...formData, [name]: value });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        if (variant) {
            await updateProductVariant(variant.id, formData);
        } else {
            await createProductVariant(formData);
        }
        onSubmit();
    };

    return (
        <form onSubmit={handleSubmit}>
            <input
                type="text"
                name="product_id"
                value={formData.product_id}
                onChange={handleChange}
                placeholder="Product ID"
                required
            />
            <input
                type="text"
                name="color_id"
                value={formData.color_id}
                onChange={handleChange}
                placeholder="Color ID"
                required
            />
            <input
                type="text"
                name="size_id"
                value={formData.size_id}
                onChange={handleChange}
                placeholder="Size ID"
                required
            />
            <input
                type="text"
                name="ram_size_id"
                value={formData.ram_size_id}
                onChange={handleChange}
                placeholder="RAM Size ID"
                required
            />
            <button type="submit">{variant ? "Update" : "Create"}</button>
            <button type="button" onClick={onCancel}>
                Cancel
            </button>
        </form>
    );
};

export default ProductVariantForm;
