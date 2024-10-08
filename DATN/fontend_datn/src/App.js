import React from "react";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
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
      <div>
        <Switch>
          <Route path="/brands" component={BrandList} />
          <Route path="/product-variants" component={ProductVariantList} />
          <Route path="/categories" component={CategoryList} />
          <Route path="/profile" component={Profile} />
          <Route path="/products" component={ProductListPage} />
          <Route path="/product/:id" component={ProductDetailPage} />
          <Route path="/categories/:id" component={CategoryPage} />
          <Route path="/user/profile" component={ProfilePage} />
        </Switch>
      </div>
    </Router>
  );
};

export default App;
