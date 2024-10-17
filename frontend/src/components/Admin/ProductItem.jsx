import React from "react";

const ProductItem = ({ product, onEditProduct, onDeleteProduct }) => {
    return (
        <li>
            <h3>{product.title}</h3>
            <p>{product.description}</p>
            <p>Price: ${product.price}</p>
            <button onClick={() => onEditProduct(product)}>Edit</button>
            <button onClick={() => onDeleteProduct(product.id)}>Delete</button>
        </li>
    );
};

export default ProductItem;
