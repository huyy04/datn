import React, { useState, useEffect } from "react";
import ProductVariantItem from "./ProductVariantItem";
import ProductVariantForm from "./ProductVariantForm";
import {
    getProductVariants,
    deleteProductVariant,
} from "../../../api/productVariant";

const ProductVariantList = () => {
    const [variants, setVariants] = useState([]);
    const [selectedVariant, setSelectedVariant] = useState(null);
    const [isFormVisible, setFormVisible] = useState(false);

    const fetchVariants = async () => {
        const data = await getProductVariants();
        setVariants(data);
    };

    useEffect(() => {
        fetchVariants();
    }, []);

    const handleEdit = (variant) => {
        setSelectedVariant(variant);
        setFormVisible(true);
    };

    const handleDelete = async (id) => {
        if (window.confirm("Are you sure you want to delete this variant?")) {
            await deleteProductVariant(id);
            fetchVariants();
        }
    };

    const handleFormSubmit = () => {
        setFormVisible(false);
        setSelectedVariant(null);
        fetchVariants();
    };

    const handleFormCancel = () => {
        setFormVisible(false);
        setSelectedVariant(null);
    };

    return (
        <div>
            <h2>Product Variants</h2>
            <button onClick={() => setFormVisible(true)}>Add Variant</button>
            {isFormVisible && (
                <ProductVariantForm
                    variant={selectedVariant}
                    onSubmit={handleFormSubmit}
                    onCancel={handleFormCancel}
                />
            )}
            <ul>
                {variants.map((variant) => (
                    <ProductVariantItem
                        key={variant.id}
                        variant={variant}
                        onEdit={handleEdit}
                        onDelete={handleDelete}
                    />
                ))}
            </ul>
        </div>
    );
};

export default ProductVariantList;
