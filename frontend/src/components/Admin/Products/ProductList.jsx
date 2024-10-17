import React, { useEffect, useState } from "react";
import {
    getProducts,
    deleteProduct,
    createProduct,
    updateProduct,
} from "../../../api/productService";
import ProductForm from "./ProductForm";
import ProductItem from "./ProductItem";

const ProductList = () => {
    const [products, setProducts] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);
    const [currentProduct, setCurrentProduct] = useState(null);

    useEffect(() => {
        const fetchProducts = async () => {
            try {
                const data = await getProducts();
                setProducts(data);
            } catch (err) {
                setError(err.message);
            } finally {
                setLoading(false);
            }
        };

        fetchProducts();
    }, []);

    const handleDelete = async (id) => {
        if (window.confirm("Bạn có chắc xóa???")) {
            try {
                await deleteProduct(id);
                setProducts(products.filter((product) => product.id !== id));
            } catch (err) {
                setError(err.message);
            }
        }
    };

    const handleEdit = (product) => {
        setCurrentProduct(product);
    };

    const handleFormSubmit = async (data) => {
        try {
            if (currentProduct) {
                await updateProduct(currentProduct.id, data);
                setCurrentProduct(null);
            } else {
                await createProduct(data);
            }
            const updatedProducts = await getProducts();
            setProducts(updatedProducts);
        } catch (err) {
            setError(err.message);
        }
    };

    if (loading) return <div>Loading...</div>;
    if (error) return <div>Error: {error}</div>;

    return (
        <div>
            <h1>Danh Sách Sản Phẩm</h1>
            <ProductForm
                currentProduct={currentProduct}
                onSubmit={handleFormSubmit}
            />
            <ul>
                {products.map((product) => (
                    <ProductItem
                        key={product.id}
                        product={product}
                        onEditProduct={handleEdit}
                        onDeleteProduct={handleDelete}
                    />
                ))}
            </ul>
        </div>
    );
};

export default ProductList;
