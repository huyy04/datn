import axios from "axios";

const apiUrl = "http://localhost:8000/api";

export const fetchProducts = async () => {
    const response = await axios.get(`${apiUrl}/products`);
    return response.data;
};

export const fetchProductById = async (id) => {
    const response = await axios.get(`${apiUrl}/products/${id}`);
    return response.data;
};

export const createProduct = async (product) => {
    const response = await axios.post(`${apiUrl}/products`, product);
    return response.data;
};

export const updateProduct = async (id, product) => {
    const response = await axios.put(`${apiUrl}/products/${id}`, product);
    return response.data;
};

export const deleteProduct = async (id) => {
    await axios.delete(`${apiUrl}/products/${id}`);
};
