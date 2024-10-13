// import React, { useState } from "react";
// import axios from "axios";

// const BrandForm = ({ onSuccess }) => {
//     const [name, setName] = useState("");

//     const handleSubmit = async (e) => {
//         e.preventDefault();
//         try {
//             await axios.post("/api/brands", { name });
//             onSuccess();
//             setName("");
//         } catch (error) {
//             console.error("Đã xảy ra lỗi:", error);
//         }
//     };

//     return (
//         <form onSubmit={handleSubmit}>
//             <h2>Thêm Thương Hiệu</h2>
//             <input
//                 type="text"
//                 value={name}
//                 onChange={(e) => setName(e.target.value)}
//                 placeholder="Tên thương hiệu"
//                 required
//             />
//             <button type="submit">Lưu</button>
//         </form>
//     );
// };

// export default BrandForm;
