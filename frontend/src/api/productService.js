import api from "./api.js";

export const getProducts = async () => {
    const response = await api.get("/api/products");
    return response.data;
};

export const createProduct = async (data) => {
    const response = await api.post("/api/products", data);
    return response.data;
};

export const updateProduct = async (id, data) => {
    const response = await api.put(`/api/products/${id}`, data);
    return response.data;
};

export const deleteProduct = async (id) => {
    const response = await api.delete(`/api/products/${id}`);
    return response.data;
};

export const getProductById = async (id) => {
    const response = await api.get(`/api/products/${id}`);
    return response.data;
};
