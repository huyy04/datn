import api from "./api";

export const getProductVariants = async () => {
    const response = await api.get("/api/product-variants");
    return response.data;
};

export const createProductVariant = async (data) => {
    const response = await api.post("/api/product-variants", data);
    return response.data;
};

export const updateProductVariant = async (id, data) => {
    const response = await api.put(`/api/product-variants/${id}`, data);
    return response.data;
};

export const deleteProductVariant = async (id) => {
    const response = await api.delete(`/api/product-variants/${id}`);
    return response.data;
};

export const getProductVariantById = async (id) => {
    const response = await api.get(`/api/product-variants/${id}`);
    return response.data;
};
