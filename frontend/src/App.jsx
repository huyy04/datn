import React, { useState } from "react";
import ProductList from "./components/Admin/ProductForm";
import ProductForm from "./components/Admin/ProductList";

const App = () => {
    const [selectedProduct, setSelectedProduct] = useState(null);

    const handleEditProduct = (product) => {
        setSelectedProduct(product);
    };

    const handleProductSaved = () => {
        setSelectedProduct(null);
    };

    return (
        <div>
            <h1>Product Management</h1>
            <ProductForm
                selectedProduct={selectedProduct}
                onProductSaved={handleProductSaved}
            />
            <ProductList onEditProduct={handleEditProduct} />
        </div>
    );
};

export default App;
