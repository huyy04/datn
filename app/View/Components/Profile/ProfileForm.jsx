// import React, { useState } from "react";
// import axios from "axios";

// const ProfileForm = ({ user }) => {
//     const [name, setName] = useState(user.name || "");
//     const [email, setEmail] = useState(user.email || "");

//     const handleSubmit = async (e) => {
//         e.preventDefault();
//         try {
//             await axios.put(`/api/users/${user.id}`, { name, email });
//             alert("Cập nhật thành công!");
//         } catch (error) {
//             console.error("Đã xảy ra lỗi:", error);
//         }
//     };

//     return (
//         <form onSubmit={handleSubmit}>
//             <h2>Cập Nhật Thông Tin Cá Nhân</h2>
//             <input
//                 type="text"
//                 value={name}
//                 onChange={(e) => setName(e.target.value)}
//                 placeholder="Tên"
//                 required
//             />
//             <input
//                 type="email"
//                 value={email}
//                 onChange={(e) => setEmail(e.target.value)}
//                 placeholder="Email"
//                 required
//             />
//             <button type="submit">Cập Nhật</button>
//         </form>
//     );
// };

// export default ProfileForm;
