import React from "react";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import BrandList from "./components/Brand/BrandList";
import CategoryList from "./components/Category/CategoryList";
import ProductVariantList from "./components/ProductVariant/ProductVariantList";
import Profile from "./components/Profile/Profile";
import ProductList from "./components/Product/ProductList";
import ProductDetail from "./components/Product/ProductDetail";

const App = () => {
    return (
        <Router>
            <Switch>
                <Route path="/brands" component={BrandList} />
                <Route path="/categories" component={CategoryList} />
                <Route
                    path="/product-variants"
                    component={ProductVariantList}
                />
                <Route path="/profile" component={Profile} />
                <Route path="/products/:id" component={ProductDetail} />
                <Route path="/products" component={ProductList} />
            </Switch>
        </Router>
    );
};

export default App;
