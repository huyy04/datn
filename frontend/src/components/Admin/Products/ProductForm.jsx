import React, { useEffect, useState } from "react";

const ProductForm = ({ currentProduct, onSubmit }) => {
    const [name, setName] = useState("");
    const [price, setPrice] = useState("");
    const [tonKho, setTonKho] = useState("");
    const [description, setDescription] = useState("");
    const [categoryId, setCategoryId] = useState("");
    const [brandId, setBrandId] = useState("");
    const [image, setImage] = useState(null);

    useEffect(() => {
        if (currentProduct) {
            setName(currentProduct.name);
            setPrice(currentProduct.price);
            setTonKho(currentProduct.ton_kho);
            setDescription(currentProduct.description);
            setCategoryId(currentProduct.category_id);
            setBrandId(currentProduct.brand_id);
        } else {
            setName("");
            setPrice("");
            setTonKho("");
            setDescription("");
            setCategoryId("");
            setBrandId("");
            setImage(null);
        }
    }, [currentProduct]);

    const handleSubmit = (e) => {
        e.preventDefault();
        const formData = new FormData();
        formData.append("name", name);
        formData.append("price", price);
        formData.append("ton_kho", tonKho);
        formData.append("description", description);
        formData.append("category_id", categoryId);
        formData.append("brand_id", brandId);
        if (image) {
            formData.append("image", image);
        }
        onSubmit(formData);
    };

    return (
        <form onSubmit={handleSubmit}>
            <h2>{currentProduct ? "Sửa Sản Phẩm" : "Thêm Sản Phẩm"}</h2>
            <input
                type="text"
                value={name}
                onChange={(e) => setName(e.target.value)}
                placeholder="Tên sản phẩm"
                required
            />
            <input
                type="number"
                value={price}
                onChange={(e) => setPrice(e.target.value)}
                placeholder="Giá"
                required
            />
            <input
                type="number"
                value={tonKho}
                onChange={(e) => setTonKho(e.target.value)}
                placeholder="Tồn kho"
                required
            />
            <textarea
                value={description}
                onChange={(e) => setDescription(e.target.value)}
                placeholder="Mô tả"
                required
            ></textarea>
            <input
                type="text"
                value={categoryId}
                onChange={(e) => setCategoryId(e.target.value)}
                placeholder="ID danh mục"
                required
            />
            <input
                type="text"
                value={brandId}
                onChange={(e) => setBrandId(e.target.value)}
                placeholder="ID thương hiệu"
                required
            />
            <input type="file" onChange={(e) => setImage(e.target.files[0])} />
            <button type="submit">
                {currentProduct ? "Cập Nhật" : "Thêm"}
            </button>
        </form>
    );
};

export default ProductForm;
