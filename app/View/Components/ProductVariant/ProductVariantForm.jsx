// import React, { useState } from "react";
// import axios from "axios";

// const ProductVariantForm = ({ onSuccess }) => {
//     const [name, setName] = useState("");
//     const [productId, setProductId] = useState("");

//     const handleSubmit = async (e) => {
//         e.preventDefault();
//         try {
//             await axios.post("/api/product-variants", {
//                 name,
//                 product_id: productId,
//             });
//             onSuccess();
//             setName("");
//             setProductId("");
//         } catch (error) {
//             console.error("Đã xảy ra lỗi:", error);
//         }
//     };

//     return (
//         <form onSubmit={handleSubmit}>
//             <h2>Thêm Biến Thể Sản Phẩm</h2>
//             <input
//                 type="text"
//                 value={name}
//                 onChange={(e) => setName(e.target.value)}
//                 placeholder="Tên biến thể"
//                 required
//             />
//             <input
//                 type="text"
//                 value={productId}
//                 onChange={(e) => setProductId(e.target.value)}
//                 placeholder="ID sản phẩm"
//                 required
//             />
//             <button type="submit">Lưu</button>
//         </form>
//     );
// };

// export default ProductVariantForm;
