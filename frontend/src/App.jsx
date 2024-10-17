import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import ProductList from "./components/Admin/Products/ProductList";
import ProductVariantList from "./components/Admin/ProductVariants/ProductVariantList";
function App() {
    return (
        <Router>
            <Navigation />
            <Routes>
                <Route path="/products" element={<ProductList />} />
                <Route
                    path="/product-variants"
                    element={<ProductVariantList />}
                />
            </Routes>
        </Router>
    );
}

export default App;
