import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";

const ProductDetail = () => {
    const { id } = useParams();
    const [product, setProduct] = useState(null);

    useEffect(() => {
        const fetchProduct = async () => {
            const response = await axios.get(
                `http://localhost:8000/api/products/${id}`
            );
            setProduct(response.data);
        };
        fetchProduct();
    }, [id]);

    if (!product) return <div>Loading...</div>;

    return (
        <div>
            <h1>{product.name}</h1>
            <img src={product.image} alt={product.name} />
            <p>{product.description}</p>
            <p>Giá: {product.price} VND</p>
        </div>
    );
};

export default ProductDetail;
