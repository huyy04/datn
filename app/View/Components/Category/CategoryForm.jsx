// import React, { useState } from "react";
// import axios from "axios";

// const CategoryForm = ({ onSuccess }) => {
//     const [name, setName] = useState("");

//     const handleSubmit = async (e) => {
//         e.preventDefault();
//         try {
//             await axios.post("/api/categories", { name });
//             onSuccess();
//             setName("");
//         } catch (error) {
//             console.error("Đã xảy ra lỗi:", error);
//         }
//     };

//     return (
//         <form onSubmit={handleSubmit}>
//             <h2>Thêm Danh Mục</h2>
//             <input
//                 type="text"
//                 value={name}
//                 onChange={(e) => setName(e.target.value)}
//                 placeholder="Tên danh mục"
//                 required
//             />
//             <button type="submit">Lưu</button>
//         </form>
//     );
// };

// export default CategoryForm;
