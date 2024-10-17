import React, { useEffect, useState } from "react";
import axios from "axios";
import ProductItem from "./ProductItem";

const ProductList = ({ onEditProduct }) => {
    const [products, setProducts] = useState([]);

    useEffect(() => {
        fetchProducts();
    }, []);

    const fetchProducts = async () => {
        try {
            const response = await axios.get("/api/san-pham");
            setProducts(response.data);
        } catch (error) {
            console.error("Error fetching products:", error);
        }
    };

    const handleDeleteProduct = async (id) => {
        try {
            await axios.delete(`/api/san-pham/delete/${id}`);
            fetchProducts();
        } catch (error) {
            console.error("Error deleting product:", error);
        }
    };

    return (
        <div>
            <h2>Product List</h2>
            <ul>
                {products.map((product) => (
                    <ProductItem
                        key={product.id}
                        product={product}
                        onEditProduct={onEditProduct}
                        onDeleteProduct={handleDeleteProduct}
                    />
                ))}
            </ul>
        </div>
    );
};

export default ProductList;
