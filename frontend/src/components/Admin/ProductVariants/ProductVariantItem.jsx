import React from "react";

const ProductVariantItem = ({ variant, onEdit, onDelete }) => {
    return (
        <li>
            <p>Product ID: {variant.product_id}</p>
            <p>Color ID: {variant.color_id}</p>
            <p>Size ID: {variant.size_id}</p>
            <p>RAM Size ID: {variant.ram_size_id}</p>
            <button onClick={() => onEdit(variant)}>Edit</button>
            <button onClick={() => onDelete(variant.id)}>Delete</button>
        </li>
    );
};

export default ProductVariantItem;
