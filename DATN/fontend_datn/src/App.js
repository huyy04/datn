import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import BrandList from "./components/admin/Brand/BrandList"; // thương hiệu
import ProductVariantList from "./components/admin/ProductVariant/ProductVariantList"; // biến thể sản phẩm
import CategoryList from "./components/admin/Category/CategoryList"; // danh mục
import Profile from "./components/admin/Profile/Profile"; // thông tin cá nhân
import ProductListPage from "./pages/admin/ProductListPage"; // danh sách sản phẩm
import ProductDetailPage from "./pages/admin/ProductDetailPage"; // chi tiết sản phẩm
import CategoryPage from "./pages/admin/CategoryPage"; // danh mục
import ProfilePage from "./pages/admin/ProfilePage"; // thông tin cá nhân

const App = () => {
  return (
    <Router>
      <Routes>
        <Route path="/brands" element={<BrandList />} />
        <Route path="/product-variants" element={<ProductVariantList />} />
        <Route path="/categories" element={<CategoryList />} />
        <Route path="/profile" element={<Profile />} />
        <Route path="/products" element={<ProductListPage />} />
        <Route path="/product/:id" element={<ProductDetailPage />} />
        <Route path="/categories/:id" element={<CategoryPage />} />
        <Route path="/user/profile" element={<ProfilePage />} />
      </Routes>
    </Router>
  );
};

export default App;
